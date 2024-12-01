<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorUsuario extends FormRequest
{
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
            'txtnombre' => 'required|string|max:255',
            'txtapellido' => 'required|string|max:255',
            'txtemail' => 'required|email|max:255',
            'txttelefono' => 'required|string|max:15',
            'txtpassword' => 'required|string|min:6',
            'txtconfirmacion' => 'required|same:txtpassword',
        ];
    }
}
