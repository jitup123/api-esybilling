<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/roles', [App\Http\Controllers\PermissionController::class,'Permission']);

Route::get('/image/{path?}/{image?}', [App\Http\Controllers\HomeController::class, 'show'])->name('image');
Route::get('/storage/{path?}',[App\Http\Controllers\HomeController::class, 'show'])->where('path', '.*');