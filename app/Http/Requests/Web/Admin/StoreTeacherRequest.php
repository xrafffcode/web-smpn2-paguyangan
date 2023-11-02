<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'gender' => 'required',
            'position' => 'required',
            'nip' => 'required',
            'birthplace' => 'required',
            'birthdate' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'status' => 'required',

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
            'name.required' => 'Nama barus di isi',
            'gender.required' => 'Jenis kelamin harus di isi',
            'position.required' => 'Jabatan harus di isi',
            'nip.required' => 'NIP harus di isi',
            'birthplace.required' => 'Tempat lahir harus di isi',
            'birthdate.required' => 'Tanggal lahir harus di isi',
            'phone.required' => 'Nomor telepon harus di isi',
            'address.required' => 'Alamat harus di isi',
            'image.required' => 'Foto harus di isi',
            'status.required' => 'Status harus di isi',
        ];
    }
}
