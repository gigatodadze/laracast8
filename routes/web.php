<?php

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

Route::get('/', function () {
    $posts = Post::latest();
    if (request('search')) {
        $posts
            ->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
    }

    return view('posts',
        [
            //'posts' => Post::latest()->with('category','author')->get(),
            'posts' => $posts->get(),
            'categories' => \App\Models\Category::all(),
        ]);
})->name('home');

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post,
    ]);
});

Route::get('categories/{category:slug}', function (\App\Models\Category $category) {
    return view('posts',
        [
            'posts' => $category->posts,
            'currentCategory' => $category,
            'categories' => \App\Models\Category::all()
            //'posts' => $category->posts->load('category','author'),
        ]);
})->name('category');

Route::get('authors/{author:username}', function (\App\Models\User $author) {
    return view('posts',
        [
            'posts' => $author->posts,
            'categories' => \App\Models\Category::all()
            //'posts' => $author->posts->load('category','author')
        ]);
});
