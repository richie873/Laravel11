<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
    [
        'id' => 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Richie Stevanus',
        'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit officiis culpa 
        voluptatibus dolorem quas quae quaerat itaque architecto eveniet totam, soluta nesciunt accusantium 
        suscipit laudantium? Nobis eveniet beatae ad autem!'
    ],
    [
        'id' => 1,
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => 'Richie Stevanus',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ad, vel accusantium 
        repellendus cupiditate veniam molestiae. Sint eius ex, id porro veritatis impedit soluta, corporis 
        minima molestias eveniet consectetur et.'
    ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
    [
        'id' => 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Richie Stevanus',
        'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit officiis culpa 
        voluptatibus dolorem quas quae quaerat itaque architecto eveniet totam, soluta nesciunt accusantium 
        suscipit laudantium? Nobis eveniet beatae ad autem!'
    ],
    [
        'id' => 1,
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => 'Richie Stevanus',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ad, vel accusantium 
        repellendus cupiditate veniam molestiae. Sint eius ex, id porro veritatis impedit soluta, corporis 
        minima molestias eveniet consectetur et.'
    ],
];

    $post = arr::first($posts, function ($post) use ($slug) {
        return $post ['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
