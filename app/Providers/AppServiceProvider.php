<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Genre;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $genresList = Genre::orderBy('created_at', 'asc')->get();
        view()->share('genresList', $genresList);
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
