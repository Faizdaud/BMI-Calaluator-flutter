<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\BlogPostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/allblogposts',[\App\Http\Controllers\BlogPostController::class, 'index']);

Route::get('/testpage', function () {
    return view('testpage');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/projects/web-development', function () {
    return view('projects.webdevelopment');
});

Route::get('/projects/mobile-development', function () {
    return view('projects.mobiledevelopment');
});

Route::get('/projects/wordpress', function () {
    return view('projects.wordpress');
});


// Route::get('/allblogs', function () {
//     return view('allblogposts');
// });

// Route::get('/blog',[\App\Http\Controllers\BlogPostController::class, 'index']);

Route::get('/blog',[\App\Http\Controllers\BlogPostController::class, 'create']);
Route::post('/blog',[\App\Http\Controllers\BlogPostController::class, 'store']);


Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);

Route::post('/blog',[\App\Http\Controllers\BlogPostController::class, 'store']);

Route::put('/blog/edit/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'edit']); //show form to update
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']); //commits update to db
Route::get('/blog/edit/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'edit']);

Route::get('/delete/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']);
Route::get('/edit/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']);
