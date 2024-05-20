<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AHPAtributeRequest extends FormRequest
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
            'nama_perhitungan'      => 'required',
            'detail'    => '',
            'c1c2'      => 'required|numeric|between:0,9',
            'c1c3'      => 'required|numeric|between:0,9',
            'c1c4'      => 'required|numeric|between:0,9',
            'c1c5'      => 'required|numeric|between:0,9',
            'c1c6'      => 'required|numeric|between:0,9',
            'c1c7'      => 'required|numeric|between:0,9',

            'c2c3'      => 'required|numeric|between:0,9',
            'c2c4'      => 'required|numeric|between:0,9',
            'c2c5'      => 'required|numeric|between:0,9',
            'c2c6'      => 'required|numeric|between:0,9',
            'c2c7'      => 'required|numeric|between:0,9',

            'c3c4'      => 'required|numeric|between:0,9',
            'c3c5'      => 'required|numeric|between:0,9',
            'c3c6'      => 'required|numeric|between:0,9',
            'c3c7'      => 'required|numeric|between:0,9',

            'c4c5'      => 'required|numeric|between:0,9',
            'c4c6'      => 'required|numeric|between:0,9',
            'c4c7'      => 'required|numeric|between:0,9',

            'c5c6'      => 'required|numeric|between:0,9',
            'c5c7'      => 'required|numeric|between:0,9',

            'c6c7'      => 'required|numeric|between:0,9',


        ];
    }
}
