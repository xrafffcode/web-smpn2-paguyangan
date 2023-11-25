<?php

namespace App\Repositories;

use App\Interfaces\ExtracurricularRepositoryInterface;
use App\Models\Extracurricular;

class ExtracurricularRepository implements ExtracurricularRepositoryInterface
{
    public function getAllExtracurriculars()
    {
        return Extracurricular::all();
    }

    public function getExtracurricularById($id)
    {
        return Extracurricular::find($id);
    }

    public function createExtracurricular(array $data)
    {
        return Extracurricular::create($data);
    }

    public function updateExtracurricular(array $data, $id)
    {
        return Extracurricular::find($id)->update($data);
    }

    public function deleteExtracurricular($id)
    {
        return Extracurricular::find($id)->delete();
    }
}
