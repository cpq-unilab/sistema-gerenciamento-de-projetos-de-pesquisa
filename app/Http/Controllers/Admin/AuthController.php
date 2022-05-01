<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login()
    {
        if (View::exists('admin.login')) {
            return view('admin.login');
        }
        abort(Response::HTTP_NOT_FOUND);
    }

    public function check(Request $request)
    {
        //Validate Inputs
        $request->validate([
           'email' => 'required|email|exists:admins,email',
           'password' => 'required|min:5|max:30'
        ], [
            'email.exists' => 'This email is not exists in admins table'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('fail', 'Incorrect credentials');
        }
    }

    public function dashboard()
    {
        $user = Auth::guard('admin')->user();
        return view('admin.dashboard', compact('user'));
    }

    public function rememberForm()
    {
        return view('admin.remember');
    }

    public function remember(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin) {
            $admin->remember_token = str_random(60);
            $admin->save();

            //$admin->notify(new \App\Notifications\AdminResetPassword($admin));

            return redirect()->route('admin.login')->with('success', 'Verifique seu email para resetar sua senha');
        } else {
            return redirect()->route('admin.login')->with('error', 'Este email não está cadastrado');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
