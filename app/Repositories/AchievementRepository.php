<?php

namespace App\Repositories;

use App\Interfaces\AchievementRepositoryInterface;
use App\Models\Achievement;
use Illuminate\Support\Facades\Storage;

class AchievementRepository implements AchievementRepositoryInterface
{
    public function getAllAchievements()
    {
        return Achievement::all();
    }

    public function getAchievementById($id)
    {
        $achievement = Achievement::findorfail($id);

        return $achievement;
    }

    public function createAchievement(array $data)
    {
        return Achievement::create($data);
    }

    public function updateAchievement(array $data, string $id)
    {
        $achievement = Achievement::find($id);

        return $achievement->update($data);
    }

    public function deleteAchievement(string $id)
    {
        $achievement = Achievement::find($id);

        return $achievement->delete();
    }
}
