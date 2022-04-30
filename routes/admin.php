<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest:admin')->group(function () {

    Route::redirect('/', 'dashboard');

    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');

    Route::get('register', function () {
        return "Register admin";
    })->name('register');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('dashboard', function () {
        return "Dashboard";
        // return view('admin.dashboard');
    })->name('dashboard');
});
