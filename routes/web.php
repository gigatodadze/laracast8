<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\File;
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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

//Route::get('categories/{category:slug}', function (\App\Models\Category $category) {
//    return view('posts',
//        [
//            'posts' => $category->posts,
//            'currentCategory' => $category,
//            'categories' => \App\Models\Category::all()
//            //'posts' => $category->posts->load('category','author'),
//        ]);
//})->name('category');

//Route::get('authors/{author:username}', function (\App\Models\User $author) {
//    return view('posts.index',
//        [
//            'posts' => $author->posts,
//        ]);
//});
