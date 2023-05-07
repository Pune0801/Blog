<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCursoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' =>  'required',
            'description' =>  'required',
            'category' =>  'required'
        ];
    }

    /* public function attributes()
    {
        return [
            'name' => 'Nombre del Curso'
        ];
    } */

    public function messages(){
        return [
            'name.required' => 'El nombre es requerido',
            'description.required' => 'Debe ingresar una descripcion del curso',
            'category.required' => 'La categoria es requerida'
        ];
    }
}
