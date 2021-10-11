<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Myoui Mina",
        "email" => "mina@twice.com",
        "image" => "mina.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_post = [
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

    $new_post = [];
    foreach($blog_post as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});