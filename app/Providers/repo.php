<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Authentication\interfaces\Authentication as AuthenticationInterface;
use App\Services\Authentication\concrete\admin;
use App\Services\repo\concrete\adminRepo;
use App\Services\repo\interfaces\adminRepoInterface;

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
