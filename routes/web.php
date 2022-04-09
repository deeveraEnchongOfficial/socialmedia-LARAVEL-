<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/profile', function () {
//     return view('profile');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('profile', 'App\Http\Controllers\ProfileController');
Route::resource('post', 'App\Http\Controllers\PostController');
Route::resource('user', 'App\Http\Controllers\UserController');
// Route::resource('like', 'App\Http\Controllers\LikeController');
Route::post('likes', [LikeController::class, 'store']);
Route::get('fetch-likes', [LikeController::class, 'index']);
