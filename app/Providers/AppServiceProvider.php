<?php

namespace App\Providers;

use App\Models\Song;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('homes.index', function($view) {
            $view->with('popular_songs', Song::orderBy('views', 'desc')->limit(3)->get());
        });
    }
}
