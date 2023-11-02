<?php

namespace App\Repositories;

use App\Interfaces\GraduationRepositoryInterface;
use App\Models\Graduation;

class GraduationRepository implements GraduationRepositoryInterface
{
    public function getAllGraduations()
    {
        return Graduation::all();
    }

    public function getGraduationByTestNumber(string $testNumber)
    {
        return Graduation::where('test_number', $testNumber)->first();
    }

    public function getGraduationById(string $id)
    {
        return Graduation::find($id);
    }

    public function createGraduation(array $data)
    {
        return Graduation::create($data);
    }

    public function updateGraduation(array $data, string $id)
    {
        return Graduation::find($id)->update($data);
    }

    public function deleteGraduation(string $id)
    {
        return Graduation::find($id)->delete();
    }
}
