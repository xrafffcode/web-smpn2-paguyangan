<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Sarfraznawaz2005\VisitLog\Models\VisitLog;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            'totalVisitor' => VisitLog::count(),
            'totalAchievement' => Achievement::count(),
        ]);
    }
}
