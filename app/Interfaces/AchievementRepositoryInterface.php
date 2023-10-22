<?php

namespace App\Interfaces;


interface AchievementRepositoryInterface
{
    public function getAllAchievements();
    public function getAchievementById(string $id);
    public function createAchievement(array $data);
    public function updateAchievement(array $data, string $id);
    public function deleteAchievement(string $id);
}
