<?php

namespace App\Repositories;

use App\Interfaces\StudentRepositoryInterface;
use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    public function getAllStudents()
    {
        return Student::latest()->get();
    }

    public function getAllStudentsByStatus(string $status)
    {
        return Student::where('status', $status)->latest()->get();
    }

    public function getStudentById(string $id)
    {
        return Student::findOrFail($id);
    }

    public function createStudent(array $data)
    {
        return Student::create($data);
    }

    public function updateStudent(array $data, string $id)
    {
        return Student::findOrFail($id)->update($data);
    }

    public function deleteStudent(string $id)
    {
        return Student::findOrFail($id)->delete();
    }

    public function searchStudents(string $query)
    {
        return Student::search($query)->latest()->get();
    }
}
