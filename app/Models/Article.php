<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    // protected $table = 'belajarLaravel_SQLite'
}

    // public static function allArticle() {
    //     return [
    //         [
    //             'id' => 1,
    //             'slug' => 'judul-artikel-1',
    //             'title' => 'Judul Artikel 1',
    //             'author' => 'Richie Stevanus',
    //             'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit officiis culpa 
    //             voluptatibus dolorem quas quae quaerat itaque architecto eveniet totam, soluta nesciunt accusantium 
    //             suscipit laudantium? Nobis eveniet beatae ad autem!'
    //         ],
    //         [
    //             'id' => 2,
    //             'slug' => 'judul-artikel-2',
    //             'title' => 'Judul Artikel 2',
    //             'author' => 'Richie Stevanus',
    //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ad, vel accusantium 
    //             repellendus cupiditate veniam molestiae. Sint eius ex, id porro veritatis impedit soluta, corporis 
    //             minima molestias eveniet consectetur et.'
    //         ],
    //     ];
    // }

    // public static function find($slugdariparam):array {
    //     // return arr::first(static::allArticle(), function ($post) use ($slug) {
    //     //     return $post ['slug'] == $slug;
    //     // });
    //     // return view('post', ['title' => 'Single Post', 'post' => $post]);    

    //     return arr::first(static::allArticle(), fn($post) => $post['slug'] == $slugdariparam) ?? abort(404);    
    // }  