<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\StudentRepositoryInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private StudentRepositoryInterface $studentRepository;

    /**
     * StudentController constructor.
     * @param StudentRepositoryInterface $studentRepository
     */
    public function __construct(
        StudentRepositoryInterface $studentRepository
    ) {
        $this->studentRepository = $studentRepository;
    }

    public function index(Request $request)
    {

        if ($request->has('q')) {
            $students = $this->studentRepository->searchStudents($request->q);
        } else {
            $students = $this->studentRepository->getAllStudentsByStatus($request->status ?? 'active');
        }

        return view('pages.frontend.about.students.index', compact('students'));
    }
}
