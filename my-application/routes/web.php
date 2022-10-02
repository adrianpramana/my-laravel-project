<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adrian Pramana",
        "email" => "adrianpramana@gmail.com",
        "image" => "my_profile.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);

Route::get('/contact', function () {
    return view('contacts', [
        "title" => "Contact"
    ]);
});
Route::get('/categories', function () {
    return view('categories', [
        "title" => "Categories"
    ]);
});


Route::get('/contact/{id}', [ContactController::class, 'show']);


// Route::get('/post', [PostController::class, 'index']);
// Route::get('/post/create', [PostController::class, 'show']);
// Route::get('/contact', function () {
//     return view('contacts');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
