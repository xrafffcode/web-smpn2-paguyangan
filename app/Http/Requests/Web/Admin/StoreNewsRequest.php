<?php

namespace App\Http\Requests\Web\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'slug' => 'required|string|max:255|unique:news',
            'description' => 'required|string',
            'content' => 'required|string',
            'news_category_id' => 'required|exists:news_categories,id',
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png|max:2048',
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
            'title.required' => 'Title harus diisi.',
            'title.string' => 'Title harus berupa string.',
            'title.max' => 'Title maksimal 255 karakter.',
            'slug.required' => 'Slug harus diisi.',
            'slug.string' => 'Slug harus berupa string.',
            'slug.max' => 'Slug maksimal 255 karakter.',
            'slug.unique' => 'Slug sudah digunakan.',
            'description.required' => 'Deskripsi harus diisi.',
            'description.string' => 'Deskripsi harus berupa string.',
            'content.required' => 'Konten harus diisi.',
            'content.string' => 'Konten harus berupa string.',
            'news_category_id.required' => 'Kategori harus diisi.',
            'news_category_id.exists' => 'Kategori tidak ditemukan.',
            'thumbnail.required' => 'Thumbnail harus diisi.',
            'thumbnail.image' => 'Thumbnail harus berupa gambar.',
            'thumbnail.mimes' => 'Thumbnail harus berupa gambar dengan format jpg, jpeg, atau png.',
            'thumbnail.max' => 'Thumbnail maksimal 2MB.',
        ];
    }
}
