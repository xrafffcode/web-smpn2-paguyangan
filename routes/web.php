<?php

use App\Http\Controllers\Web\Admin\DashboardController;
use App\Http\Controllers\Web\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Sarfraznawaz2005\VisitLog\Http\Controllers\VisitLogController;
use Sarfraznawaz2005\VisitLog\VisitLog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\Web\Frontend\LandingController::class, 'index'])->name('home');
Route::get('/gallery', [\App\Http\Controllers\Web\Frontend\GalleryController::class, 'index'])->name('gallery');
Route::get('/prestasi', [\App\Http\Controllers\Web\Frontend\AchievementController::class, 'index'])->name('achievement');
Route::get('/kelulusan', [\App\Http\Controllers\Web\Frontend\GraduationController::class, 'index'])->name('graduation');
Route::get('/ekstrakurikuler', [\App\Http\Controllers\Web\Frontend\ExtracurricularController::class, 'index'])->name('extracurricular');
Route::get('/ekstrakurikuler/{id}', [\App\Http\Controllers\Web\Frontend\ExtracurricularController::class, 'show'])->name('extracurricular.show');
Route::get('/guru-dan-karyawan', [\App\Http\Controllers\Web\Frontend\TeacherController::class, 'index'])->name('teacher');
Route::get('/guru-dan-karyawan/{id}', [\App\Http\Controllers\Web\Frontend\TeacherController::class, 'show'])->name('teacher.show');
Route::get('/siswa', [\App\Http\Controllers\Web\Frontend\StudentController::class, 'index'])->name('student');
Route::get('/berita', [\App\Http\Controllers\Web\Frontend\NewsController::class, 'index'])->name('news');
Route::get('/berita/{slug}', [\App\Http\Controllers\Web\Frontend\NewsController::class, 'show'])->name('news.show');
Route::get('/struktur-organisasi', [\App\Http\Controllers\Web\Frontend\OrganizationalStructureController::class, 'index'])->name('organizational-structure');
Route::get('/visi-misi', [\App\Http\Controllers\Web\Frontend\VisionMissionController::class, 'index'])->name('vision-mission');
