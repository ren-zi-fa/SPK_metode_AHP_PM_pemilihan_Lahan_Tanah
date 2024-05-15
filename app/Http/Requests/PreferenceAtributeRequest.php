<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreferenceAtributeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'detail' => '',
            'harga'  => 'required',
            'perizinan_regulasi'  => 'required',
            'ketersediaan_air'  => 'required',
            'lokasi'  => 'required',
            'potensi_produksi'     => 'required',
            'aksesibilitas'    => 'required',
            'kondisi_lingkungan'  => 'required',
        ];
    }
}
