<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Alterar conforme sua lógica de autorização
    }

    public function rules()
    {
        return [
            'content' => 'required|string',
            'post_id' => 'required|integer|exists:posts,id',  // Verifica se o post existe
        ];
    }

    public function messages()
    {
        return [
            'content.required' => 'O conteúdo do comentário é obrigatório.',
            'content.string' => 'O conteúdo do comentário deve ser uma string.',
            'post_id.required' => 'O ID do post é obrigatório.',
            'post_id.integer' => 'O ID do post deve ser um número inteiro.',
            'post_id.exists' => 'O post com esse ID não existe.',
        ];
    }
}
