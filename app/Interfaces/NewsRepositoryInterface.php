<?php

namespace App\Interfaces;


interface NewsRepositoryInterface
{
    public function getAllNews();

    public function getNewsById(string $id);

    public function createNews(array $data);

    public function updateNews(array $data, string $id);

    public function deleteNews(string $id);

    public function getPublishedNews();

    public function getNewsBySlug(string $slug);

    public function getNewsByCategoryId(string $categoryId);
}
