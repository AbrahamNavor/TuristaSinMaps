<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorReservacion extends FormRequest
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
            'txtapellido' => 'required|string|max:255',
            'txtemail' => 'required|email|max:255',
            'txttelefono' => 'required|string|max:15',
            'txtreservacion' => 'required|date',
            'txthora' => 'required|date_format:H:i',
            'txtpersonas' => 'required|integer|min:1',
            'txtvuelo' => 'required|string|max:50',
            'txthotel' => 'required|string|max:255',
        ];
    }
}
