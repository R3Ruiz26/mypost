<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/todoposts',[PostController::class,'index']);
Route::get('/xcategory/{id}',[PostController::class,'porCategoria']);


Route::get('/post/categories', function () {
    return Post::with('categories')->get();
 });
