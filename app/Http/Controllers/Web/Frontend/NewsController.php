<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\NewsRepositoryInterface;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private NewsRepositoryInterface $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        $news = $this->newsRepository->getAllNews();

        return view('pages.frontend.news.index', compact('news'));
    }

    public function show(string $slug)
    {
        $news = $this->newsRepository->getNewsBySlug($slug);

        return view('pages.frontend.news.show', compact('news'));
    }
}
