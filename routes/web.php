<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;

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


Route::get('/', [frontendController::class, 'index'])->name('home');
Route::get('/matches', [frontendController::class, 'matches'])->name('matches');
Route::get('/teams', [frontendController::class, 'teams'])->name('teams');
Route::get('/news', [frontendController::class, 'news'])->name('news');
Route::get('/shop', [frontendController::class, 'shop'])->name('shop');
Route::get('/media', [frontendController::class, 'media'])->name('media');
Route::get('/contact', [frontendController::class, 'contact'])->name('contact');
Route::get('/information', [frontendController::class, 'information'])->name('information');
Route::get('/register', [frontendController::class, 'register'])->name('register');
Route::get('/about', [frontendController::class, 'about'])->name('about');
Route::get('/policy', [frontendController::class, 'policy'])->name('policy');


Route::get('/welcome', function () {
    return view('welcome');
});
