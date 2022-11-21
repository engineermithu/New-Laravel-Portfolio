<?php

namespace App\Providers;

use App\Repositories\Admin\PermissionRepository;
use App\Repositories\Admin\RoleRepository;
use App\Repositories\Admin\StaffRepository;
use App\Repositories\Admin\TopSectionRepository;
use App\Repositories\Admin\UserRepository;
use App\Repositories\Interfaces\Admin\PermissionInterface;
use App\Repositories\Interfaces\Admin\RoleInterface;
use App\Repositories\Interfaces\Admin\StaffInterface;
use App\Repositories\Interfaces\Admin\TopSectionInterface;
use App\Repositories\Interfaces\Admin\UserInterface;
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
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(RoleInterface::class, RoleRepository::class);
        $this->app->bind(PermissionInterface::class, PermissionRepository::class);
        $this->app->bind(StaffInterface::class, StaffRepository::class);
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
