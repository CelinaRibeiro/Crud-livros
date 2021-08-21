<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoredUpdateFuncionario extends FormRequest
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
            'nome' => 'required|string',
            'rg' => 'required|max:11|string',
            'cpf' => 'required|max:14|cpf',
            'data_nascimento' => 'date',
            'telefone' => 'max:14',
            'email' => 'required|email'
        ];
    }
}
