<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('package-alert', \App\View\Components\Alert::class);
        Blade::component('package-navbar', \App\View\Components\Navbar::class);
        Blade::component('package-header', \App\View\Components\Header::class);
        Blade::component('package-footer', \App\View\Components\Footer::class);
    }
}
