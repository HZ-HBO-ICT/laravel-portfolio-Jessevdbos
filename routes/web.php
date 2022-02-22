<?php

use App\Http\Controllers\GradeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticlesController;

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

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/post/{name}', [PostController::class, 'show']);
Route::resource('/grades', GradeController::class);

// CRUD actions faq
//Route::get('/faq', [FaqController::class, "index"]);
//Route::post('/faq', [FaqController::class, 'store']);
//Route::get('/faq/create', [FaqController::class, 'create']);
//Route::get('/faq/{id}', [FaqController::class, "show"]);
//Route::get('/faq/{id}/edit', [FaqController::class, "edit"]);
//Route::put('/faq/{id}', [FaqController::class, "update"]);
//Route::delete('/faq/{id}', [FaqController::class, "delete"]);

Route::resource('/faqs', FaqController::class);


// CRUD actions articles
//Route::get('/blog', [ArticlesController::class, "index"]);
//Route::post('/blog', [ArticlesController::class, 'store']);
//Route::get('/blog/create', [ArticlesController::class, 'create']);
//Route::get('/blog/{article}', [ArticlesController::class, "show"]);
//Route::get('/blog/{article}/edit', [ArticlesController::class, "edit"]);
//Route::put('/blog/{article}', [ArticlesController::class, "update"]);
//Route::delete('/blog/{article}', [ArticlesController::class, "delete"]);

Route::resource('/blogs', ArticlesController::class);
