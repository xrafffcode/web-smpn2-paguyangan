<?php

namespace App\Providers;

use App\Interfaces\BannerRepositoryInterface as InterfacesBannerRepositoryInterface;
use App\Interfaces\WebConfigurationRepositoryInterface;
use App\Repositories\BannerRepository;
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
