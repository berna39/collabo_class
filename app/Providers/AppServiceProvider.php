<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
<<<<<<< HEAD
        Schema::defaultStringLength(191);
=======
<<<<<<< HEAD
        Schema::defaultStringLength(191);
=======
        Schema::defaultStringLength(100);
>>>>>>> bbb982687cc7292b6fcf0a6e2006d7a4b66c6b68
>>>>>>> 6d188656a63c4bba2cf70999b2f0babe63e88600
    }
}
