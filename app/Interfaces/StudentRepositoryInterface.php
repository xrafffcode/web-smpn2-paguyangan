<?php

namespace App\Interfaces;

interface StudentRepositoryInterface
{
    public function getAllStudents();
    public function getAllStudentsByStatus(string $status);
    public function getStudentById(string $id);
    public function createStudent(array $data);
    public function updateStudent(array $data, string $id);
    public function deleteStudent(string $id);
    public function searchStudents(string $query);
}
