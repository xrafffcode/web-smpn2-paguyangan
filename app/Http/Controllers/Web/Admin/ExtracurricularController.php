<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreExtracurricularRequest;
use App\Interfaces\ExtracurricularRepositoryInterface;
use App\Interfaces\TeacherRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class ExtracurricularController extends Controller
{
    private ExtracurricularRepositoryInterface $extracurricularRepository;
    private TeacherRepositoryInterface $teacherRepository;

    public function __construct(ExtracurricularRepositoryInterface $extracurricularRepository, TeacherRepositoryInterface $teacherRepository)
    {
        $this->extracurricularRepository = $extracurricularRepository;
        $this->teacherRepository = $teacherRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extracurriculars = $this->extracurricularRepository->getAllExtracurriculars();

        return view('pages.admin.extracurricular.index', compact('extracurriculars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = $this->teacherRepository->getAllTeachers();

        return view('pages.admin.extracurricular.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExtracurricularRequest $request)
    {
        $this->extracurricularRepository->createExtracurricular($request->all());

        Swal::toast('Ekstrakurikuler berhasil ditambahkan', 'success');

        return redirect()->route('admin.extracurriculars.index');
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
        //
    }
}
