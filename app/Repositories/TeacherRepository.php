<?php

namespace App\Repositories;

use App\Interfaces\TeacherRepositoryInterface;
use App\Models\Teacher;


class TeacherRepository implements TeacherRepositoryInterface
{
    public function getAllTeachers()
    {
        return Teacher::all();
    }

    public function getTeacherById(string $id)
    {
        return Teacher::find($id);
    }

    public function createTeacher(array $data)
    {
        $data['image'] = $data['image']->store('images/teachers', 'public');

        return Teacher::create($data);
    }

    public function updateTeacher(array $data, string $id)
    {
        return Teacher::find($id)->update($data);
    }

    public function deleteTeacher(string $id)
    {
        return Teacher::find($id)->delete();
    }
}
