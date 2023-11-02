<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreGraduationRequest;
use App\Interfaces\GraduationRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class GraduationController extends Controller
{

    private GraduationRepositoryInterface $graduationRepository;

    public function __construct(GraduationRepositoryInterface $graduationRepository)
    {
        $this->graduationRepository = $graduationRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $graduations = $this->graduationRepository->getAllGraduations();

        return view('pages.admin.graduations.index', compact('graduations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.graduations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGraduationRequest $request)
    {
        try {
            $this->graduationRepository->createGraduation($request->all());

            Swal::toast('Berhasil menambahkan data kelulusan', 'success');

            return redirect()->route('admin.graduations.index');
        } catch (\Exception $e) {
            Swal::error('Gagal', 'Gagal menambahkan data kelulusan');

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
        $graduation = $this->graduationRepository->getGraduationById($id);

        return view('pages.admin.graduations.edit', compact('graduation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $this->graduationRepository->updateGraduation($request->all(), $id);

            Swal::toast('Berhasil mengubah data kelulusan', 'success');

            return redirect()->route('admin.graduations.index');
        } catch (\Exception $e) {
            Swal::error('Gagal', 'Gagal mengubah data kelulusan');

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->graduationRepository->deleteGraduation($id);

            Swal::toast('Berhasil menghapus data kelulusan', 'success');

            return redirect()->route('admin.graduations.index');
        } catch (\Exception $e) {
            Swal::error('Gagal', 'Gagal menghapus data kelulusan');

            return redirect()->back()->withInput();
        }
    }
}
