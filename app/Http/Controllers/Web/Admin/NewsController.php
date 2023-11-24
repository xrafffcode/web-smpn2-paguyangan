<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreNewsRequest;
use App\Interfaces\NewsCategoryRepositoryInterface;
use App\Interfaces\NewsRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class NewsController extends Controller
{
    private NewsRepositoryInterface $newsRepository;
    private NewsCategoryRepositoryInterface $newsCategoryRepository;

    public function __construct(NewsRepositoryInterface $newsRepository, NewsCategoryRepositoryInterface $newsCategoryRepository)
    {
        $this->newsRepository = $newsRepository;
        $this->newsCategoryRepository = $newsCategoryRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = $this->newsRepository->getAllNews();

        return view('pages.admin.news-management.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->newsCategoryRepository->getAllNewsCategories();

        return view('pages.admin.news-management.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge([
            'published_at' => Carbon::now(),
        ]);

        $this->newsRepository->createNews($request->all());

        Swal::toast('Berhasil menambahkan berita', 'success');

        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->newsRepository->deleteNews($id);

        Swal::toast('Berhasil menghapus berita', 'success');

        return redirect()->route('admin.news.index');
    }
}
