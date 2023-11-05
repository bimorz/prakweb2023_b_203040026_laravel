<?php

namespace App\Models;

//bimo RZ

class Post
{
    private static $blog_posts = [
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