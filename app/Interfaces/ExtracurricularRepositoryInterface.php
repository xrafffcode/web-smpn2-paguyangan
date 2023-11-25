<?php

namespace App\Interfaces;


interface ExtracurricularRepositoryInterface
{
    public function getAllExtracurriculars();

    public function getExtracurricularById(string $id);

    public function createExtracurricular(array $data);

    public function updateExtracurricular(array $data, string $id);

    public function deleteExtracurricular(string $id);
}
