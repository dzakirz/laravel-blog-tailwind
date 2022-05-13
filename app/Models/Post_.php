<?php

namespace App\Models;

class Post{
    private static $blogPosts =
    [
        [
            "title" => "Judul Post Pertama",
            "author" => "Dzaki Rozaan",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, necessitatibus adipisci voluptatibus illum, dolores, quas tempore delectus officiis nisi est magnam beatae tempora! Quo voluptatum distinctio dolore, mollitia dignissimos porro consequuntur suscipit ipsum magni exercitationem, sunt vel quae temporibus. Sit amet doloremque est quae aliquam saepe fugit illo maiores ex cumque ipsa temporibus nulla accusantium quaerat iusto dolores recusandae delectus dolore illum, ipsam animi consectetur vero? Commodi doloribus nam nisi sint maxime unde."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Nandita Winasti",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, ipsam a vero voluptatem quasi odit fugit maxime quod vitae illum repellat, corrupti dolore harum deleniti. Corporis, expedita velit doloribus optio praesentium consectetur facere iusto fugiat nesciunt voluptatem illo similique cum temporibus qui deserunt? Distinctio porro vel debitis aut sit aperiam voluptatibus earum fugiat. Possimus unde eos quidem facere. Repellat exercitationem iusto veritatis dolore voluptate voluptates porro? Perferendis repellendus velit dolorem. Quisquam minus facere, commodi impedit et itaque ipsum distinctio illo blanditiis placeat quasi dolorum laudantium."
        ]
    ];

    public static function all(){
        return collect(self::$blogPosts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
