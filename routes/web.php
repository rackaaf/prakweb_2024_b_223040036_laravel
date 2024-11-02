<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Racka', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Racka Zian',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta odio quaerat dolores
            pariatur vero voluptas
            beatae similique suscipit numquam nisi itaque, adipisci dolorum modi temporibus dignissimos, corrupti
            officiis quia consequuntur aperiam molestias reprehenderit maiores id deserunt obcaecati. Cum aperiam
            dolorum explicabo architecto repellendus, molestias tempora nemo obcaecati quidem modi non?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Racka Zian',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, sed dicta sequi
            atque, similique culpa harum earum eveniet non impedit voluptate cum saepe, dignissimos quis architecto
            maxime labore deserunt qui!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {

    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Racka Zian',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta odio quaerat dolores
            pariatur vero voluptas
            beatae similique suscipit numquam nisi itaque, adipisci dolorum modi temporibus dignissimos, corrupti
            officiis quia consequuntur aperiam molestias reprehenderit maiores id deserunt obcaecati. Cum aperiam
            dolorum explicabo architecto repellendus, molestias tempora nemo obcaecati quidem modi non?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Racka Zian',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, sed dicta sequi
            atque, similique culpa harum earum eveniet non impedit voluptate cum saepe, dignissimos quis architecto
            maxime labore deserunt qui!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
