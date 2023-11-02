<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\AchievementRepositoryInterface;
use Illuminate\Http\Request;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;

class AchievementController extends Controller
{

    private AchievementRepositoryInterface $achievementRepository;

    public function __construct(AchievementRepositoryInterface $achievementRepository)
    {
        $this->achievementRepository = $achievementRepository;

        VisitLog::save();
    }

    public function index()
    {
        $achievements = $this->achievementRepository->getAllAchievements()->sortByDesc('year');

        return view('pages.frontend.achievements.index', compact('achievements'));
    }
}
