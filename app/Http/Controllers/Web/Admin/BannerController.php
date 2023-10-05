<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreBannerRequest;
use App\Interfaces\BannerRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class BannerController extends Controller
{

    private BannerRepositoryInterface $bannerRepository;

    public function __construct(BannerRepositoryInterface $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = $this->bannerRepository->getAllBanners();

        return view('pages.admin.website-management.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.website-management.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBannerRequest $request)
    {
        try {
            $this->bannerRepository->createBanner($request->all());

            Swal::toast('Data berhasil ditambahkan', 'success');

            return redirect()->route('admin.banners.index');
        } catch (\Exception $e) {
            Swal::toast($e->getMessage(), 'error');

            return redirect()->route('admin.banners.index');

            return redirect()->back();
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
        $banner = $this->bannerRepository->getBannerById($id);

        return view('pages.admin.website-management.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $this->bannerRepository->updateBanner($request->all(), $id);

            Swal::toast('Data berhasil diupdate', 'success');

            return redirect()->route('admin.banners.index');
        } catch (\Exception $e) {

            Swal::toast($e->getMessage(), 'error');

            return redirect()->route('admin.banners.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->bannerRepository->deleteBanner($id);

            Swal::toast('Data berhasil dihapus', 'success');

            return redirect()->route('admin.banners.index');
        } catch (\Exception $e) {
            Swal::toast($e->getMessage(), 'error');
            return redirect()->route('admin.banners.index');
        }
    }
}
