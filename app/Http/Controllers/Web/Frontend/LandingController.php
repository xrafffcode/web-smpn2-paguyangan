<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\BannerRepositoryInterface;
use App\Interfaces\GalleryRepositoryInterface;
use App\Interfaces\NewsRepositoryInterface;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;

class LandingController extends Controller
{

    private BannerRepositoryInterface $bannerRepository;
    private NewsRepositoryInterface $newsRepository;
    private GalleryRepositoryInterface $galleryRepository;

    public function __construct(BannerRepositoryInterface $bannerRepository, NewsRepositoryInterface $newsRepository, GalleryRepositoryInterface $galleryRepository)
    {
        $this->bannerRepository = $bannerRepository;
        $this->newsRepository = $newsRepository;
        $this->galleryRepository = $galleryRepository;

        VisitLog::save();
    }

    public function index()
    {

        $banners = $this->bannerRepository->getAllBanners();
        $news = $this->newsRepository->getAllNews();
        $galleries = $this->galleryRepository->getAllGalleries()->take(6);

        return view('index', compact('banners', 'news', 'galleries'));
    }
}
