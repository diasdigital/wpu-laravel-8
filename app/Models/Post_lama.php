<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Post pertama",
            "slug" => "post-pertama",
            "author" => "Myoui Mina",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elementum tincidunt massa eu lobortis. Morbi semper metus erat, vel eleifend urna porttitor nec. Donec lacinia odio eu quam vehicula elementum. Proin nunc purus, ultricies in lectus ut, congue rutrum eros. Sed quis tortor eu quam molestie eleifend ut tristique felis. Pellentesque non mi aliquet, viverra leo in, elementum erat. Morbi volutpat nisl id felis pellentesque, sit amet sodales orci tristique. Fusce sed accumsan odio. Praesent vel mi nunc. Nam euismod."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Hirai Momo",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus augue dolor, et feugiat justo commodo vel. In at augue in elit vehicula laoreet porta vitae odio. Mauris ultrices vestibulum est sed tempus. Fusce suscipit ipsum quis erat eleifend, pretium accumsan nulla faucibus. Duis congue faucibus volutpat. Sed at tortor tempor, imperdiet leo ut, semper lacus. Pellentesque suscipit enim at."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
