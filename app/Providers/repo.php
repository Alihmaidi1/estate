<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Authentication\interfaces\Authentication as AuthenticationInterface;
use App\Services\Authentication\concrete\admin;
use App\Services\repo\concrete\adminRepo;
use App\Services\repo\concrete\roleRepo;
use App\Services\repo\interfaces\adminRepoInterface;
use App\Services\repo\interfaces\roleRepoInterface;

class repo extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthenticationInterface::class, admin::class);
        $this->app->bind(adminRepoInterface::class, adminRepo::class);
        $this->app->bind(roleRepoInterface::class, roleRepo::class);
    
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
