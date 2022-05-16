<?php

use App\Http\Controllers\GradeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth']);

Route::resource('/dashboardSchools', GradeController::class)->middleware(['auth']);
Route::resource('/faqs', \App\Http\Controllers\FaqController::class)->middleware(['auth']);
Route::resource('/blogs', \App\Http\Controllers\ArticlesController::class)->middleware(['auth']);

