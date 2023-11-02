<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\GraduationRepositoryInterface;
use Illuminate\Http\Request;

class GraduationController extends Controller
{
    private GraduationRepositoryInterface $graduationRepository;

    public function __construct(GraduationRepositoryInterface $graduationRepository)
    {
        $this->graduationRepository = $graduationRepository;
    }

    public function index()
    {
        return view('pages.frontend.graduations.index');
    }
}
