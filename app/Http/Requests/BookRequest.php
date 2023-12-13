<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required',
            'id_user'=>'required',
            'pages'=>'required|numeric',
            'price'=>'required|numeric',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'title.required'=>'O título é obrigatório!',
    //         'id_user.required'=>'A escolha o autor é obrigatória.',
    //         'pages.required'=>'Preencha as Páginas com números.',
    //         'price.required'=>'Preencha Preço com números.',
    //     ];
    // }
}
