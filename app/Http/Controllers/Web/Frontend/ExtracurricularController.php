<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\ExtracurricularRepositoryInterface;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    private ExtracurricularRepositoryInterface $extracurricularRepository;

    public function __construct(ExtracurricularRepositoryInterface $extracurricularRepository)
    {
        $this->extracurricularRepository = $extracurricularRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extracurriculars = $this->extracurricularRepository->getAllExtracurriculars();

        return view('pages.frontend.extracurricular.index', compact('extracurriculars'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $extracurricular = $this->extracurricularRepository->getExtracurricularById($id);

        return view('pages.frontend.extracurricular.show', compact('extracurricular'));
    }
}
