<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\homepage::class,'index']);
Route::get('/viewPost/{id}', [\App\Http\Controllers\homepage::class,'viewPost']);
Route::get('/delete/{id}', [\App\Http\Controllers\homepage::class,'delete']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/pages', \App\Http\Controllers\PagesController::class);

Route::resource('/posts', \App\Http\Controllers\PostsController::class);
