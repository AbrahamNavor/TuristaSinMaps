<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorVuelo extends FormRequest
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
            'txtorigen' => 'required|string|max:255',
            'txtdestino' => 'required|string|max:255',
            'txtfecha_salida' => 'required|date',
            'txtfecha_regreso' => 'required|date',
            'txtasientos' => 'required|integer|min:1',
            'txtclase' => 'required|string|in:economica,ejecutiva,primera',
            'txtaerolinea' => 'required|string|max:255',
            'txtvuelo' => 'required|string|max:50',
            'txthorario_salida' => 'required|date_format:H:i',
            'txthorario_llegada' => 'required|date_format:H:i',
        ];
    }
}
