<?php

namespace App\Http\Controllers\Api\Frontend;

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

    public function show(Request $request)
    {

        $graduation = $this->graduationRepository->getGraduationByTestNumber($request->test_number);

        if (!$graduation) {
            return response()->json([
                'message' => 'Data tidak ditemukan',
            ], 200);
        }

        return response()->json([
            'message' => 'Data ditemukan',
            'data' => $graduation,
        ], 200);
    }
}
