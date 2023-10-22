<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAchievementRequest extends FormRequest
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
            'achievement' => 'required|string',
            'level' => 'required|string',
            'year' => 'required|integer',
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
            'name.required' => 'Nama prestasi tidak boleh kosong.',
            'name.string' => 'Nama prestasi harus berupa string.',
            'achievement.required' => 'Prestasi tidak boleh kosong.',
            'achievement.string' => 'Prestasi harus berupa string.',
            'level.required' => 'Tingkat prestasi tidak boleh kosong.',
            'level.string' => 'Tingkat prestasi harus berupa string.',
            'year.required' => 'Tahun prestasi tidak boleh kosong.',
            'year.integer' => 'Tahun prestasi harus berupa angka.',
        ];
    }
}
