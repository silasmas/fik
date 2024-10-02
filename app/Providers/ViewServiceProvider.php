<?php

namespace App\Providers;

use App\Models\team;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('pages.*', function ($view) {
            $titre = getTitle(Route::currentRouteName());
            $team = team::where('is_active', true)->get();
            //  dd($titre);
            $view->with('title', $titre);
            $view->with('team', $team);
        });
    }
}
