@extends('layouts.admin')

@section('content')
@include('admin.header')

<div>
    <a href="{{route('admin.notices.list-to-import-sigaa')}}">Importar editais</a>
</div>

@foreach ($notices as $notice)
{{$notice->id}} -
{{$notice->number}} -
{{$notice->year}} -
{{$notice->code}}
<br>

@endforeach

@endsection
