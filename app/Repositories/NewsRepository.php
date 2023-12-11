<?php

namespace App\Repositories;

use App\Interfaces\NewsRepositoryInterface;
use App\Models\News;

class NewsRepository implements NewsRepositoryInterface
{
    public function getAllNews($paginate = 10)
    {
        return News::paginate($paginate);
    }

    public function getNewsById(string $id)
    {
        return News::find($id);
    }

    public function createNews(array $data)
    {
        return News::create($data);
    }

    public function updateNews(array $data, string $id)
    {
        return News::find($id)->update($data);
    }

    public function deleteNews(string $id)
    {
        return News::find($id)->delete();
    }

    public function getPublishedNews()
    {
        return News::published()->get();
    }

    public function getNewsBySlug(string $slug)
    {
        return News::where('slug', $slug)->first();
    }

    public function getNewsByCategoryId(string $categoryId)
    {
        return News::where('news_category_id', $categoryId)->get();
    }
}
