<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post =  Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
