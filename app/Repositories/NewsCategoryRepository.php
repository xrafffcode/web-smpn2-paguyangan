<?php

namespace App\Repositories;

use App\Interfaces\NewsCategoryRepositoryInterface;
use App\Models\NewsCategory;

class NewsCategoryRepository implements NewsCategoryRepositoryInterface
{
    public function getAllNewsCategories()
    {
        return NewsCategory::all();
    }

    public function getNewsCategoryById(string $id)
    {
        return NewsCategory::find($id);
    }

    public function createNewsCategory(array $data)
    {
        return NewsCategory::create($data);
    }

    public function updateNewsCategory(array $data, string $id)
    {
        return NewsCategory::find($id)->update($data);
    }

    public function deleteNewsCategory(string $id)
    {
        return NewsCategory::destroy($id);
    }
}
