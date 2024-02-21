<?php

namespace App\Providers;

use App\Models\Books;
use Illuminate\Support\Facades\View;
use Laravel\Fortify\Fortify;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view::share('books', Books::all());
    }
}
