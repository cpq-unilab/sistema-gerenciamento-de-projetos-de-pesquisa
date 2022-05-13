@extends('layouts.admin')

@section('content')
@include('admin.header')

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Edital</th>
            <th>Fluxo Contínuo</th>
            <th>Funções</th>
        </tr>
    </thead>
<tbody>
    @foreach ($noticesFromSigaa as $notice)
    <tr>
        <td>{{$notice->id_edital}}</td>
        <td>{{$notice->codigo_edital}}</td>
        <td>
            @if($notice->fluxo_continuo == 'f')
                Não
            @else
                Sim
            @endif
        
        </td>
        <td>
            @if(!in_array($notice->id_edital, $importedLocal))
            <a class="btn btn-indigo" href="{{route('admin.notices.import-by-id', $notice->id_edital)}}">Importar</a>
            @endif
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
