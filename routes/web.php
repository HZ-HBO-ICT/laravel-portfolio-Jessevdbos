<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;

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

Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/index.html', [WelcomeController::class, 'show']);
Route::get('/profile.html', [ProfileController::class, 'show']);
Route::get('/dashboard.html', [DashboardController::class, 'show']);
Route::get('/faq.html', [FaqController::class, 'show']);
Route::get('/blog.html', [BlogController::class, 'showblog']);

//verschillende blogpost-links hieronder
Route::get('feedback.html', [BlogController::class, "showfeedback"]);
Route::get('swot.html', [BlogController::class, "showswot"]);
Route::get('ict.html', [BlogController::class, "showict"]);
Route::get('programmeerervaring.html', [BlogController::class, "showervaring"]);
Route::get('studiekeuze.html', [BlogController::class, "showstudiekeuze"]);
