<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Alterar conforme sua lógica de autorização
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'user_id' => 'required|integer|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O título do post é obrigatório.',
            'title.string' => 'O título do post deve ser uma string.',
            'title.max' => 'O título do post deve ter no máximo 255 caracteres.',
            'content.required' => 'O conteúdo do post é obrigatório.',
            'content.string' => 'O conteúdo do post deve ser uma string.',
            'user_id.required' => 'O ID do usuário é obrigatório.',
            'user_id.integer' => 'O ID do usuário deve ser um número inteiro.',
            'user_id.exists' => 'O usuário não existe no sistema.',
        ];
    }
}
