<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreExtracurricularRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'teacher_id' => 'required|exists:teachers,id',
            'description' => 'required|string',
            'image' => 'required|image',
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
            'name.required' => 'Nama ekstrakurikuler tidak boleh kosong',
            'name.string' => 'Nama ekstrakurikuler harus berupa string',
            'teacher_id.required' => 'Nama guru tidak boleh kosong',
            'teacher_id.exists' => 'Nama guru tidak ditemukan',
            'description.required' => 'Deskripsi ekstrakurikuler tidak boleh kosong',
            'description.string' => 'Deskripsi ekstrakurikuler harus berupa string',
            'image.required' => 'Gambar ekstrakurikuler tidak boleh kosong',
            'image.image' => 'Gambar ekstrakurikuler harus berupa gambar',
        ];
    }
}
