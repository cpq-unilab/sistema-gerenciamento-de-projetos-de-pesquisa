@extends('layouts.admin')

@section('content')
@include('admin.header')

<div class="flex flex-wrap mt-4 justify-center gap-2">

    @foreach($cards as $key => $card)

    <a href="{{route('admin.' . $key . '.index')}}"
        class="w-40 border border-indigo-400 rounded-md  text-center bg-indigo-50 hover:bg-indigo-200">
        <h3 class="m-1 text-4xl">{{$card['count']}}</h3>
        <p>{{$card['label']}}</p>
    </a>
    @endforeach

</div>

@endsection
