<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreNewsCategoryRequest;
use App\Http\Requests\Web\Admin\UpdateNewsCategoryRequest;
use App\Interfaces\NewsCategoryRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class NewsCategoryController extends Controller
{
    private NewsCategoryRepositoryInterface $newsCategoryRepository;

    public function __construct(NewsCategoryRepositoryInterface $newsCategoryRepository)
    {
        $this->newsCategoryRepository = $newsCategoryRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->newsCategoryRepository->getAllNewsCategories();

        return view('pages.admin.news-management.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.news-management.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsCategoryRequest $request)
    {
        $this->newsCategoryRepository->createNewsCategory($request->all());

        Swal::toast('Berhasil menambahkan kategori berita', 'success');

        return redirect()->route('admin.news-categories.index');
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
        $category = $this->newsCategoryRepository->getNewsCategoryById($id);

        return view('pages.admin.news-management.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsCategoryRequest $request, string $id)
    {
        $this->newsCategoryRepository->updateNewsCategory($request->all(), $id);

        Swal::toast('Berhasil mengubah kategori berita', 'success');

        return redirect()->route('admin.news-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->newsCategoryRepository->deleteNewsCategory($id);

        Swal::toast('Berhasil menghapus kategori berita', 'success');

        return redirect()->route('admin.news-categories.index');
    }
}
