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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('banners', \App\Http\Controllers\Web\Admin\BannerController::class);
    Route::get('web-configuration', [\App\Http\Controllers\Web\Admin\WebConfigurationController::class, 'index'])->name('web-configuration');
    Route::put('web-configuration/{id}', [\App\Http\Controllers\Web\Admin\WebConfigurationController::class, 'update'])->name('web-configuration.update');

    Route::resource('galleries', \App\Http\Controllers\Web\Admin\GalleryController::class);
});


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
