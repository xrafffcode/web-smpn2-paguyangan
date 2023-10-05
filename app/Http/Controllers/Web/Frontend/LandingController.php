<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\BannerRepositoryInterface;

class LandingController extends Controller
{

    private BannerRepositoryInterface $bannerRepository;

    public function __construct(BannerRepositoryInterface $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }

    public function index()
    {
        $banners = $this->bannerRepository->getAllBanners();

        return view('index', compact('banners'));
    }
}
