@extends('layouts.admin')

@section('content')
@include('admin.header')

<form action="{{route('admin.notices.store')}}" method="post">

    <label for="id_sigaa">ID Sigaa</label>
    <input class="form-control" type="text" id="id_sigaa" name="id_sigaa" value="{{$notice->codigo_edital}}" />
    <label for="number">Número</label>
    <input class="form-control" type="text" id="number" name="number" value="" />
    <label for="year">Ano</label>
    <input class="form-control" type="text" id="year" name="year" value="" />
    <label for="code">Código</label>
    <input class="form-control" type="text" id="code" name="code" value="{{$notice->codigo_edital}}" />
    <label for="description">Descrição</label>
    <input class="form-control" type="text" id="description" name="description" value="{{$notice->descricao_edital}}" />

    <label for="submission_start">Início da Submissão</label>
    <input class="form-control" type="text" id="submission_start" name="submission_start" value="{{$notice->data_inicio_submissao}}" />
    <label for="submission_end">Fim da submissão</label>
    <input class="form-control" type="text" id="submission_end" name="submission_end" value="{{$notice->data_fim_submissao}}" />

    <label for="submission_appeal_start">Início da submissão de recurso contra a homologação</label>
    <input class="form-control" type="text" id="submission_appeal_start" name="submission_appeal_start" value="" />
    <label for="submission_appeal_end">Fim da submissão de recurso contra a homologação</label>
    <input class="form-control" type="text" id="submission_appeal_end" name="submission_appeal_end" value="" />

    <label for="evaluation_start">Início do período de avaliação</label>
    <input class="form-control" type="text" id="evaluation_start" name="evaluation_start" value="" />
    <label for="evaluation_end">Fim do período de avaliação</label>
    <input class="form-control" type="text" id="evaluation_end" name="evaluation_end" value="" />

    <label for="evaluation_appeal_start">Início da submissão de recurso contra a avaliação</label>
    <input class="form-control" type="text" id="evaluation_appeal_start" name="evaluation_appeal_start" value="" />
    <label for="evaluation_appeal_end">Fim da submissão de recurso contra a avaliação</label>
    <input class="form-control" type="text" id="evaluation_appeal_end" name="evaluation_appeal_end" value="" />

    <label for="execution_start">Início da execução dos projetos</label>
    <input class="form-control" type="text" id="execution_start" name="execution_start" value="{{$notice->data_inicio_execucao}}" />
    <label for="execution_end">Fim da execução dos projetos</label>
    <input class="form-control" type="text" id="execution_end" name="execution_end" value="{{$notice->data_fim_submissao}}" />

    <label for="continuous_flow">Fluxo contínuo?</label>
    <input class="form-control" type="text" id="continuous_flow" name="continuous_flow" value="{{$notice->fluxo_continuo == 'f' ? 'Não' : 'Sim'}}" />

    <label for="file_path">Arquivo PDF do edital</label>
    <input class="form-control" type="text" id="file_path" name="file_path" value="" />

    <input class="btn btn-indigo" type="submit" value="Importar">

</form>
@endsection
