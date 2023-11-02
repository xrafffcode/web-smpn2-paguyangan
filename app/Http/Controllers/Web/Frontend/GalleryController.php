<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\GalleryRepositoryInterface;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;

class GalleryController extends Controller
{

    private GalleryRepositoryInterface $galleryRepository;

    public function __construct(GalleryRepositoryInterface $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;

        VisitLog::save();
    }

    public function index()
    {
        $galleries = $this->galleryRepository->getAllGalleries();

        return view('pages.frontend.galleries.index', compact('galleries'));
    }
}
