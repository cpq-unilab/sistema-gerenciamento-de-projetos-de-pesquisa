@extends('layouts.admin')

@section('content')

<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-16 w-auto" src="{{asset('images/logo-proppg.jpg')}}" alt="Logo Proppg">
            <h2>Login na área administrativa</h2>
        </div>
        <form class="mt-8 space-y-6" action="{{route('admin.check')}}" method="POST" autocomplete="off">
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email-address" class="sr-only">Email</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Email">
                    @error('email')
                    <div class="text-red-500 mb-2 text-sm font-bold">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="password" class="sr-only">Senha</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Senha">
                    @error('password')
                    <div class="text-red-500 mb-2 text-sm font-bold">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <x-btn-login />

        </form>

        <div class="flex items-center justify-end">
            <div class="text-sm">
                <a href="{{route('admin.remember.form')}}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Esqueceu a senha? </a>
            </div>
        </div>
    </div>
</div>
@endsection
