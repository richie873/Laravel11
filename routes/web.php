<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Article::allArticle()]);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Article::find(($slug));
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
