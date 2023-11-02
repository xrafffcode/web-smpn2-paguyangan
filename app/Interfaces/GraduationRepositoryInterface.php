<?php

namespace App\Interfaces;

interface GraduationRepositoryInterface
{
    public function getAllGraduations();
    public function getGraduationByTestNumber(string $testNumber);
    public function getGraduationById(string $id);
    public function createGraduation(array $data);
    public function updateGraduation(array $data, string $id);
    public function deleteGraduation(string $id);
}
