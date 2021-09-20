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

Route::get('/', [NavController::class, 'groupes'])->name('groupes');

//Navigation
Route::get('/about', [NavController::class, 'about'])->name('about');
Route::get('/groupes', [NavController::class, 'groupes'])->name('groupes');
Route::get('/groupe/{id}', [NavController::class,'show'])->name('groupe');


//back office
Auth::routes();
Route::get('/home', [PostsController::class, 'index'])->name('home');
Route::get('/write', [HomeController::class, 'article'])->name('write');
Route::post('/upload', [ImageController::class, 'upload'])->name('upload');
Route::resource('/posts',PostsController::class);