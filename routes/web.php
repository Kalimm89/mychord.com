<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\StyleController;
use App\Http\Controllers\Admin\SongController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistSingleController;
use App\Http\Controllers\StyleSingleController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PopularController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/article/{slug}', [HomeController::class, 'show'])->name('homes.single');
Route::get('/artist', [ArtistSingleController::class, 'index'])->name('artists.all');
Route::get('/artist/{slug}', [ArtistSingleController::class, 'show'])->name('artists.single');
Route::get('/style', [StyleSingleController::class, 'index'])->name('styles.all');
Route::get('/style/{slug}', [StyleSingleController::class, 'show'])->name('styles.single');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/popular', [PopularController::class, 'index'])->name('popular');

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('/artists', ArtistController::class);
    Route::resource('/styles', StyleController::class);
    Route::resource('/songs', SongController::class);
});
Route::middleware('guest')->group(function () {
Route::get('/register', [UserController::class, 'create'])->name('register.create');
Route::post('/register', [UserController::class, 'store'])->name('register.store');
Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
Route::post('/login', [UserController::class, 'login'])->name('login');
});
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');