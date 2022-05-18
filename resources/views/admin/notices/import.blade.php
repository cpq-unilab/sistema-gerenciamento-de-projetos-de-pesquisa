@extends('layouts.admin')

@section('content')
@include('admin.header')

<h2>Importar editais do Sigaa</h2>

<form action="{{route('admin.notices.store')}}" method="post">
    @csrf

    <label for="continuous_flow">Fluxo contínuo?</label>
    <input type="checkbox" id="continuous_flow" name="continuous_flow" {{$notice->fluxo_continuo ==
    'f' ? '' : 'checked'}} />

    <br />

    <input class="form-control" type="text" id="id_sigaa" name="id_sigaa" value="{{$notice->id_edital}}" disabled />
    @error('id_sigaa')
    <span class="text-red-500">{{ $message }}</span>
    @enderror

    <div class="columns-3">
        <div class="w-full">
            <label for="number">Número</label>
            <input class="form-control" type="text" id="number" name="number" value="{{old('number')}}"
                placeholder="01" />
            @error('number')
            <span class="text-red-500">{{ $message }}</span>
            @enderror

        </div>
        <div class="w-full">
            <label for="year">Ano</label>
            <input class="form-control" type="text" id="year" name="year" value="{{old('year')}}" placeholder="2022" />
            @error('year')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full">
            <label for="code">Código</label>
            <input class="form-control" type="text" id="code" name="code" value="{{$notice->codigo_edital}}"
                placeholder="Edital 01/2022 - Pibic/Unilab" />
            @error('code')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

    </div>

    <div>
        <label for="description">Descrição</label>
        <input class="form-control" type="text" id="description" name="description"
            value="{{$notice->descricao_edital}}" placeholder="Descrição do edital" />
        @error('description')
        <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="columns-2">
        <div class="w-full">
            <label for="submission_start">Início da Submissão de projetos</label>
            <input class="form-control" type="text" datepicker datepicker-format="dd/mm/yyyy" id="submission_start"
                name="submission_start" datepicker-locale="pt-br" value="{{$notice->data_inicio_submissao}}" />
            @error('submission_start')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full">
            <label for="submission_end">Fim da submissão de projetos</label>
            <input class="form-control" type="text" datepicker datepicker-format="dd/mm/yyyy" id="submission_end"
                name="submission_end" value="{{$notice->data_fim_submissao}}" />
            @error('submission_end')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="columns-2">
        <div class="w-full">
            <label for="submission_appeal_start">Início da submissão de recurso contra a homologação</label>
            <input class="form-control" type="text" datepicker datepicker-format="dd/mm/yyyy"
                id="submission_appeal_start" name="submission_appeal_start"
                value="{{old('submission_appeal_start')}}" />
            @error('submission_appeal_start')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full">
            <label for="submission_appeal_end">Fim da submissão de recurso contra a homologação</label>
            <input class="form-control" type="text" datepicker datepicker-format="dd/mm/yyyy" id="submission_appeal_end"
                name="submission_appeal_end" value="{{old('submission_appeal_end')}}" />
            @error('submission_appeal_end')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="columns-2">
        <div class="w-full">
            <label for="evaluation_start">Início do período de avaliação</label>
            <input class="form-control" type="text" datepicker datepicker-format="dd/mm/yyyy" id="evaluation_start"
                name="evaluation_start" value="{{old('evaluation_start')}}" />
            @error('evaluation_start')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full">
            <label for="evaluation_end">Fim do período de avaliação</label>
            <input class="form-control" type="text" datepicker datepicker-format="dd/mm/yyyy" id="evaluation_end"
                name="evaluation_end" value="{{old('evaluation_end')}}" />
            @error('evaluation_end')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="columns-2">
        <div class="w-full">
            <label for="evaluation_appeal_start">Início da submissão de recurso contra a avaliação</label>
            <input class="form-control" type="text" datepicker datepicker-format="dd/mm/yyyy"
                id="evaluation_appeal_start" name="evaluation_appeal_start"
                value="{{old('evaluation_appeal_start')}}" />
            @error('evaluation_appeal_start')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full">
            <label for="evaluation_appeal_end">Fim da submissão de recurso contra a avaliação</label>
            <input class="form-control" type="text" datepicker datepicker-format="dd/mm/yyyy" id="evaluation_appeal_end"
                name="evaluation_appeal_end" value="{{old('evaluation_appeal_end')}}" />
            @error('evaluation_appeal_end')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="columns-2">
        <div class="w-full">
            <label for="execution_start">Início da execução dos projetos</label>
            <input class="form-control" type="text" datepicker datepicker-format="dd/mm/yyyy" id="execution_start"
                name="execution_start" value="{{$notice->data_inicio_execucao}}" />
            @error('execution_start')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full">
            <label for="execution_end">Fim da execução dos projetos</label>
            <input class="form-control" type="text" datepicker datepicker-format="dd/mm/yyyy" id="execution_end"
                name="execution_end" value="{{$notice->data_fim_execucao}}" />
            @error('execution_end')
            <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <label for="file_path">Arquivo PDF do edital</label>
    <input class="mt-2" type="file" id="file_path" name="file_path" />

    <br />
    <input class="btn btn-indigo mt-2 mb-5" type="submit" value="Importar">

</form>
<pre>
{{print_r($notice)}}
@endsection
