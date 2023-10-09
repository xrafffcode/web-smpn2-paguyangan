<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\GalleryRepositoryInterface;

class GalleryController extends Controller
{

    private GalleryRepositoryInterface $galleryRepository;

    public function __construct(GalleryRepositoryInterface $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    public function index()
    {
        $galleries = $this->galleryRepository->getAllGalleries();

        return view('pages.frontend.galleries.index', compact('galleries'));
    }
}
