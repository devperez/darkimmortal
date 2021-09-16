<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostsController;
use App\Models\Post;

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
    $posts = Post::latest()->paginate(10);
    return view('welcome', compact('posts'))->with(request()->input('page'));
});

//Navigation
Route::get('/about', [NavController::class, 'about'])->name('about');
Route::get('/groupes', [NavController::class, 'groupes'])->name('groupes');


//back office
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/write', [HomeController::class, 'article'])->name('write');
Route::post('/upload', [ImageController::class, 'upload'])->name('upload');
Route::resource('/posts',PostsController::class);