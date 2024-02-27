<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserControllerPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');

Route::resource('books', BooksController::class)->except(['books.create', 'books.edit']);

Route::middleware('auth')->group(function(){
    Route::resource('books', BooksController::class)->only(['books.create', 'books.edit']);
});
Route::get('/user/books', [UserControllerPage::class, 'index'])->name('user.books');
Route::get('/user/home', [UserControllerPage::class, 'auth'])->name('home.user');