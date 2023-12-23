<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreGalleryRequest;
use App\Interfaces\GalleryRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class GalleryController extends Controller
{

    private GalleryRepositoryInterface $galleryRepository;

    public function __construct(GalleryRepositoryInterface $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = $this->galleryRepository->getAllGalleries();

        return view('pages.admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        try {
            $this->galleryRepository->createGallery($request->all());

            Swal::toast('Data berhasil ditambahkan', 'success');

            return redirect()->route('admin.galleries.index');
        } catch (\Exception $e) {
            Swal::error('Gagal', 'Galeri gagal ditambahkan');

            return redirect()->back()->withInput();
        }
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
        try {
            $this->galleryRepository->deleteGallery($id);

            Swal::toast('Data berhasil dihapus', 'success');

            return redirect()->route('admin.galleries.index');
        } catch (\Exception $e) {
            Swal::error('Gagal', 'Galeri gagal dihapus');

            return redirect()->back();
        }
    }
}
