<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorHotel extends FormRequest
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
            'txtnombre' => 'required|string|max:255',
            'txtdireccion' => 'required|string|max:255',
            'txttelefono' => 'required|string|max:15',
            'txthabitaciones' => 'required|integer|min:1',
            'txtcategoria' => 'required|string|in:1 estrella,2 estrellas,3 estrellas,4 estrellas,5 estrellas',
            'txtservicios' => 'required|string|max:255',
        ];
    }
}
