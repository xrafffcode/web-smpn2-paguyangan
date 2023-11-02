<?php

namespace App\Providers;

use App\Interfaces\AchievementRepositoryInterface;
use App\Interfaces\BannerRepositoryInterface as InterfacesBannerRepositoryInterface;
use App\Interfaces\GalleryRepositoryInterface;
use App\Interfaces\GraduationRepositoryInterface;
use App\Interfaces\GuestBookRepositoryInterface;
use App\Interfaces\TeacherRepositoryInterface;
use App\Interfaces\WebConfigurationRepositoryInterface;
use App\Repositories\AchievementRepository;
use App\Repositories\BannerRepository;
use App\Repositories\GalleryRepository;
use App\Repositories\GraduationRepository;
use App\Repositories\GuestBookRepository;
use App\Repositories\TeacherRepository;
use App\Repositories\WebConfigurationRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(InterfacesBannerRepositoryInterface::class, BannerRepository::class);
        $this->app->bind(WebConfigurationRepositoryInterface::class, WebConfigurationRepository::class);
        $this->app->bind(GalleryRepositoryInterface::class, GalleryRepository::class);
        $this->app->bind(AchievementRepositoryInterface::class, AchievementRepository::class);
        $this->app->bind(GuestBookRepositoryInterface::class, GuestBookRepository::class);
        $this->app->bind(GraduationRepositoryInterface::class, GraduationRepository::class);
        $this->app->bind(TeacherRepositoryInterface::class, TeacherRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
