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
        "name" => "Alif Luqman",
        "email" => "alifluqman994@gmail.com",
        "image" => "alifl.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alif Luqman Hakim",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, commodi adipisci hic id debitis in molestias,
            laborum consequatur perferendis ducimus vitae, fugiat obcaecati quia enim. Corporis inventore consequatur, dolore fugit
            temporibus molestiae repellendus! Sed neque similique, atque, dolores odio vel distinctio dicta eius quam culpa tempore
            illum ducimus eaque minima accusantium quibusdam soluta eveniet perferendis explicabo error adipisci laboriosam aperiam
            nam! Asperiores ratione accusantium rerum quibusdam, voluptate quod repellendus a! Consequuntur, eveniet doloribus
            impedit eaque assumenda veniam nemo nesciunt ex!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Budi Audrey",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab placeat temporibus autem minima iste nihil quisquam deserunt
            repellat obcaecati corrupti recusandae at tenetur, tempora nobis id maiores eius nam, unde voluptas eligendi saepe
            laudantium dolorum velit suscipit? Natus, qui earum consequatur illum, recusandae nam unde esse alias a error soluta
            facilis. Officiis placeat eveniet eaque saepe, tempore voluptate! Error voluptate commodi maxime similique eveniet,
            consequatur voluptatum cum totam ex rerum quia illo eos, dolorum quas officiis vitae. Corporis unde sequi dicta, eaque
            sint exercitationem illum rerum blanditiis veritatis, consequuntur repellendus? Saepe placeat velit nam aspernatur
            consectetur veritatis tempora reprehenderit similique!"
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alif Luqman Hakim",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, commodi adipisci hic id debitis in molestias,
            laborum consequatur perferendis ducimus vitae, fugiat obcaecati quia enim. Corporis inventore consequatur, dolore fugit
            temporibus molestiae repellendus! Sed neque similique, atque, dolores odio vel distinctio dicta eius quam culpa tempore
            illum ducimus eaque minima accusantium quibusdam soluta eveniet perferendis explicabo error adipisci laboriosam aperiam
            nam! Asperiores ratione accusantium rerum quibusdam, voluptate quod repellendus a! Consequuntur, eveniet doloribus
            impedit eaque assumenda veniam nemo nesciunt ex!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Budi Audrey",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab placeat temporibus autem minima iste nihil quisquam deserunt
            repellat obcaecati corrupti recusandae at tenetur, tempora nobis id maiores eius nam, unde voluptas eligendi saepe
            laudantium dolorum velit suscipit? Natus, qui earum consequatur illum, recusandae nam unde esse alias a error soluta
            facilis. Officiis placeat eveniet eaque saepe, tempore voluptate! Error voluptate commodi maxime similique eveniet,
            consequatur voluptatum cum totam ex rerum quia illo eos, dolorum quas officiis vitae. Corporis unde sequi dicta, eaque
            sint exercitationem illum rerum blanditiis veritatis, consequuntur repellendus? Saepe placeat velit nam aspernatur
            consectetur veritatis tempora reprehenderit similique!"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
