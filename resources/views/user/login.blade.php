@extends('layouts.admin')

@section('content')
<h2 class="text-2xl bold">Formulário de login (Adminstração)</h2>

<form action="{{route('admin.check')}}" method="post">
    @csrf

    <label for="email">e-mail</label>
    <input type="text" name="email" id="email" value="{{old('email')}}">

    @error('email')
    <div class="text-red-500">{{$message}}</div>
    @enderror

    <label for="password">Senha</label>
    <input type="text" name="password" id="password" value="{{old('password')}}">
    @error('password')
    <div class="text-red-500">{{$message}}</div>
    @enderror
    <input type="submit" value="Login">
</form>
@endsection
