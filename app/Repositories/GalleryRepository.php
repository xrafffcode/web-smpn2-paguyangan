<?php

namespace App\Repositories;

use App\Interfaces\GalleryRepositoryInterface;
use App\Models\Gallery;

class GalleryRepository implements GalleryRepositoryInterface
{
    public function getAllGalleries()
    {
        return Gallery::all();
    }

    public function getGalleryById(string $id)
    {
        return Gallery::find($id);
    }

    public function createGallery(array $data)
    {

        $image = $data['image']->store('galleries', 'public');

        $data['image'] = $image;

        return Gallery::create($data);
    }

    public function updateGallery(array $data, string $id)
    {
        $gallery = Gallery::find($id);

        if (isset($data['image'])) {
            $image = $data['image']->store('galleries', 'public');
            $data['image'] = $image;
        }

        return $gallery->update($data);
    }

    public function deleteGallery(string $id)
    {
        return Gallery::find($id)->delete();
    }
}
