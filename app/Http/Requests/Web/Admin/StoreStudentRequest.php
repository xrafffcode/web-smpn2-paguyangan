<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'status' => 'required|string',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama tidak boleh kosong',
            'name.string' => 'Nama harus berupa string',
            'name.max' => 'Nama maksimal 255 karakter',
            'class.required' => 'Kelas tidak boleh kosong',
            'class.string' => 'Kelas harus berupa string',
            'class.max' => 'Kelas maksimal 255 karakter',
            'status.required' => 'Status tidak boleh kosong',
            'status.string' => 'Status harus berupa string',
        ];
    }
}
