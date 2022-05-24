<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoticeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->get('continuous_flow') == 'on') {
            return [
                'id_sigaa' => 'nullable|unique:imported_notices',
                'number' => 'required|regex:/^[0-9]{2}$/',
                'year' => 'required|regex:/^[0-9]{4}$/',
                'code' => 'required|max:255',
                'description' => 'required|unique:notices|max:255',
                'submission_start' => 'required|date_format:d/m/Y',
                'submission_end' => 'required|date_format:d/m/Y|after:submission_start',
                'submission_appeal_start' => 'required|date_format:d/m/Y',
                'submission_appeal_end' => 'required|date_format:d/m/Y|after:submission_appeal_start',
                'evaluation_start' => 'required|date_format:d/m/Y',
                'evaluation_end' => 'required|date_format:d/m/Y|after:evaluation_start',
                'evaluation_appeal_start' => 'required|date_format:d/m/Y',
                'evaluation_appeal_end' => 'required|date_format:d/m/Y|after:evaluation_appeal_start',
                'execution_start' => 'required|date_format:d/m/Y',
                'execution_end' => 'required|date_format:d/m/Y|after:execution_start',
                'continuous_flow' => 'required|boolean',
            ];
        } else {
            return [
                'id_sigaa' => 'nullable|unique:imported_notices',
                'number' => 'required|digits:2',
                'year' => 'required|digits:4',
                'code' => 'required|max:255',
                'description' => 'required|unique:notices|max:255',
                'submission_start' => 'required|date_format:d/m/Y',
                'submission_end' => 'required|date_format:d/m/Y|after:submission_start',
                'submission_appeal_start' => 'required|date_format:d/m/Y|after:submission_end',
                'submission_appeal_end' => 'required|date_format:d/m/Y|after:submission_appeal_start',
                'evaluation_start' => 'required|date_format:d/m/Y|after:submission_appeal_end',
                'evaluation_end' => 'required|date_format:d/m/Y|after:evaluation_start',
                'evaluation_appeal_start' => 'required|date_format:d/m/Y|after:evaluation_end',
                'evaluation_appeal_end' => 'required|date_format:d/m/Y|after:evaluation_appeal_start',
                'execution_start' => 'required|date_format:d/m/Y|after:evaluation_appeal_end',
                'execution_end' => 'required|date_format:d/m/Y|after:execution_start',
            ];
        }
    }

    public function messages()
    {
        return [
            'id_sigaa.unique' => 'Este edital já foi importado.',
            'number.required' => 'O número do edital é obrigatório.',
            'year.required' => 'O ano do edital é obrigatório.',
            'description.unique' => 'Esta descrição já existe na base de dados.',
            'submission_start.date' => 'Data inválida para início de submissão.',
            'submission_end.date' => 'Data inválida para final de submissão.',
            'submission_end.after' => 'Data final deve ser maior que data inicial de submissão.',
            'submission_appeal_start.required' => 'Data de início de submissão é requerida',
            'submission_appeal_start.date' => 'Data inválida para início de submissão de recurso contra o deferimento da proposta.',
            'submission_appeal_start.after' => 'Data inicial deve ser maior que data final de submissão de projetos.',
            'submission_appeal_end.required' => 'Data final da submissão é requerida',
            'submission_appeal_end.date' => 'Data inválida para o final da submissão de recurso contra o deferimento da proposta.',
            'submission_appeal_end.after' => 'Data final deve ser maior que data inicial de submissão de recurso contra o deferimento da proposta',
            'evaluation_start.required' => 'Data de início da avaliação é requerida',
            'evaluation_start.date' => 'Data invalida para início da avaliação.',
            'evaluation_start.after' => 'Data inicial deve ser maior que data final de submissão de recursos.',
            'evaluation_end.required' => 'Data final da avaliação é requerida',
            'evaluation_end.date' => 'Data inválida final da avaliação.',
            'evaluation_end.after' => 'Data final deve ser maior que data inicial da avaliação.',
            'evaluation_appeal_start.required' => 'Data de inicio de submissão de recurso contra a avaliação é requerida',
            'evaluation_appeal_start.date' => 'Data inválida para início de submissão de recurso contra a avaliação da proposta.',
            'evaluation_appeal_start.after' => 'Data inicial deve ser maior que data final da avaliação.',
            'evaluation_appeal_end.required' => 'Data final da submissão de recurso contra a avaliação é requerida',
            'evaluation_appeal_end.date' => 'Data inválida para final de submissão de recurso contra a avaliação da proposta.',
            'evaluation_appeal_end.after' => 'Data final deve ser maior que data inicial de submissão de recurso contra a avaliação da proposta.',
            'execution_start.date' => 'Data inválida para início de execução do projeto.',
            'execution_start.after' => 'Data para início de execução do projeto deve ser maior que data final para submissão.',
            'execution_end.date' => 'Data inválida para final da execução do projeto.',
            'execution_end.after' => 'Data final deve ser maior que a data inicial de execução do projeto.',
            'id_sigaa' => 'nullable|unique:imported_notices',

            'code.required' => 'code e campo requerido',
            'description.required' => 'description e campo requerido',
            'submission_start.required' => 'submission_start e campo requerido',
            'submission_end.required' => 'submission_end e campo requerido',
            'submission_appeal_start.required' => 'submission_appeal_start e campo requerido',
            'submission_appeal_end.required' => 'submission_appeal_end e campo requerido',
            'evaluation_start.required' => 'evaluation_start e campo requerido',
            'evaluation_end.required' => 'evaluation_end e campo requerido',
            'evaluation_appeal_start.required' => 'evaluation_appeal_start e campo requerido',
            'evaluation_appeal_end.required' => 'evaluation_appeal_end e campo requerido',
            'execution_start.required' => 'execution_start e campo requerido',
            'execution_end.required' => 'execution_end e campo requerido',
            'continuous_flow.required' => 'continuous_flow e campo requerido',
        ];
    }
}
