<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SexoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nombre' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
