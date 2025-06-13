<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{

    public function boot(): void
{
    Paginator::useBootstrapFive(); // ou useBootstrapFour() se for o caso
}


    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

}
