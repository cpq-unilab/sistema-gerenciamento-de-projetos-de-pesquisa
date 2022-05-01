@extends('layouts.admin')

@section('content')

<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-16 w-auto" src="{{asset('images/logo-proppg.jpg')}}" alt="Logo Proppg">
            <h2>Esqueceu a senha?</h2>
            <p class="text-center">Informe seu e-mail e clique em recuperar senha para receber uma mensagem com
                informações de recuperação</p>
        </div>
        <form class="mt-8 space-y-6" action="{{route('admin.remember')}}" method="POST">
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email-address" class="sr-only">Email</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required
                        class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Email">
                    @error('email')
                    <div class="text-red-500 mb-2 text-sm font-bold">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <button type="submit"
                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                    <!-- Heroicon name: solid/lock-closed -->
                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                </span>
                Recuperar senha
            </button>
        </form>

        <div class="flex items-center justify-end">
            <div class="text-sm">
                <a href="{{route('admin.login')}}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Fazer login </a>
            </div>
        </div>
    </div>
</div>
@endsection
