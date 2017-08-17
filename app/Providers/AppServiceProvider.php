<?php

namespace App\Providers;

use App\Services\GiaServices;
use App\Services\MethodologyServices;
use App\Services\ProgressServices;
use App\Services\StudentServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(StudentServices::class);
        $this->app->singleton(MethodologyServices::class);
        $this->app->singleton(GiaServices::class);
        $this->app->singleton(ProgressServices::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
