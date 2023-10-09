<?php

namespace App\Interfaces;

interface GalleryRepositoryInterface
{
    public function getAllGalleries();
    public function getGalleryById(string $id);
    public function createGallery(array $data);
    public function updateGallery(array $data, string $id);
    public function deleteGallery(string $id);
}
