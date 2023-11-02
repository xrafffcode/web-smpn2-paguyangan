<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuestBookRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'date' => ['required', 'date'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama harus diisi',
            'name.string' => 'Nama harus berupa string',
            'name.max' => 'Nama maksimal 255 karakter',
            'name.min' => 'Nama minimal 3 karakter',
            'phone.required' => 'Nomor telepon harus diisi',
            'phone.string' => 'Nomor telepon harus berupa string',
            'address.required' => 'Alamat harus diisi',
            'address.string' => 'Alamat harus berupa string',
            'date.required' => 'Tanggal harus diisi',
            'date.date' => 'Tanggal harus berupa tanggal',
        ];
    }
}
