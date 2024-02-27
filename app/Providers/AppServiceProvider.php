<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\Genre;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\View;
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
       view::share('books', Book::all());

       view::share('genres', Genre::all());
    }
}
