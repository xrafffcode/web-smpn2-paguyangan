<?php

namespace App\Interfaces;

interface TeacherRepositoryInterface
{
    public function getAllTeachers();
    public function getTeacherById(string $id);
    public function createTeacher(array $data);
    public function updateTeacher(array $data, string $id);
    public function deleteTeacher(string $id);
}
