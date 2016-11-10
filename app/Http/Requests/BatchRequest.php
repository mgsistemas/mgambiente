<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BatchRequest extends FormRequest
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
        return [
            'nome' => 'required|max:200',
            'ambiente' => 'required|max:200',
            'projeto_id' => 'required',
            'situacao' => 'required',
            'execucao' => 'required|max:200',
            'saida' => 'required|max:200'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome do Batch é obrigatório.',
            'nome.max' => 'Nome do Batch deve ter no máximo 200 caracteres',

        ];
    }
}
