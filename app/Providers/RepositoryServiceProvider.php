<?php

namespace App\Providers;

use App\Repositories\Admin\TopSectionRepository;
use App\Repositories\Interfaces\Admin\TopSectionInterface;
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
        $this->app->bind(TopSectionInterface::class, TopSectionRepository::class);
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
