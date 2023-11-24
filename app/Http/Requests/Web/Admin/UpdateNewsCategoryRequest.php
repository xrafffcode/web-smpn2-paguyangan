<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:news_categories,slug',
            'description' => 'nullable|string',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Title harus diisi',
            'title.string' => 'Title harus berupa string',
            'title.max' => 'Title maksimal 255 karakter',
            'slug.required' => 'Slug harus diisi',
            'slug.string' => 'Slug harus berupa string',
            'slug.max' => 'Slug maksimal 255 karakter',
            'slug.unique' => 'Slug sudah digunakan',
            'description.string' => 'Description harus berupa string',
        ];
    }
}
