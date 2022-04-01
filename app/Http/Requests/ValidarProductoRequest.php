<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarProductoRequest extends FormRequest
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
            'clave' => 'required|min:3|max:10',
            'nombre' => 'required|min:3|max:45',
            'precio' => 'required|numeric',
            'tamaño' => 'required|',
            'img'    => 'file'
        ];
    }
}
