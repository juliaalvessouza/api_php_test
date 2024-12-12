<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Alterar conforme sua lógica de autorização
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:tags,name',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome da tag é obrigatório.',
            'name.string' => 'O nome da tag deve ser uma string.',
            'name.max' => 'O nome da tag deve ter no máximo 255 caracteres.',
            'name.unique' => 'Já existe uma tag com esse nome.',
        ];
    }
}
