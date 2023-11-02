<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreAchievementRequest;
use App\Http\Requests\Web\Admin\UpdateAchievementRequest;
use App\Interfaces\AchievementRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class AchievementController extends Controller
{
    private AchievementRepositoryInterface $achievementRepository;

    public function __construct(AchievementRepositoryInterface $achievementRepository)
    {
        $this->achievementRepository = $achievementRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = $this->achievementRepository->getAllAchievements();

        return view('pages.admin.achievements.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.achievements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAchievementRequest $request)
    {
        $this->achievementRepository->createAchievement($request->validated());

        Swal::toast('Data berhasil ditambahkan', 'success');

        return redirect()->route('admin.achievements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $achievement = $this->achievementRepository->getAchievementById($id);

        return view('pages.admin.achievements.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAchievementRequest $request, string $id)
    {
        $this->achievementRepository->updateAchievement($request->all(), $id);

        Swal::toast('Data berhasil diubah', 'success');

        return redirect()->route('admin.achievements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->achievementRepository->deleteAchievement($id);

        Swal::toast('Data berhasil dihapus', 'success');

        return redirect()->route('admin.achievements.index');
    }
}
