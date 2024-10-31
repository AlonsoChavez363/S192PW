<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibros extends FormRequest
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
            'isbn'=>'required|numeric|min:13',
            'nombre'=>'required|string|min:10|max:150',
            'paginas'=>'required|integer|min:1',
            'añoP'=>'required|integer|digits:4|min:1000|max:2024',
            'correo'=>'required|email:rfc,dns',
            'autor'=>'required|min:30|max:150',
            'editorial'=>'required|min:30|max:60'
            

        ];
    }
}
