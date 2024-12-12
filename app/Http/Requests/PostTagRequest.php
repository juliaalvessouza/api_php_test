<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostTagRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Alterar conforme sua lógica de autorização
    }

    public function rules()
    {
        return [
            'post_id' => 'required|integer|exists:posts,id',
            'tag_id' => 'required|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'post_id.required' => 'O ID do post é obrigatório.',
            'post_id.integer' => 'O ID do post deve ser um número inteiro.',
            'post_id.exists' => 'O post com esse ID não existe.',
            'tag_id.required' => 'O ID da tag é obrigatório.',
            'tag_id.integer' => 'O ID da tag deve ser um número inteiro.',
            'tag_id.exists' => 'A tag com esse ID não existe.',
        ];
    }
}
