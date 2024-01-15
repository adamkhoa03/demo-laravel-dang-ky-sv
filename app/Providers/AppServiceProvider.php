<?php

namespace App\Providers;

use App\Services\Contracts\UserServices;
use App\Services\Implement\UserServicesImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application Services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserServices::class, UserServicesImpl::class);
    }

    /**
     * Bootstrap any application Services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
