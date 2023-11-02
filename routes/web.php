<?php

use App\Http\Controllers\Web\Admin\DashboardController;
use App\Http\Controllers\Web\Auth\LoginController;
use Illuminate\Support\Facades\Route;

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
