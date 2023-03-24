<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// extends Model

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Makalah new 1",
            "slug" => "judul-post-pertama",
            "author" => "Gusti",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste earum consectetur itaque blanditiis, incidunt nihil, odio quas hic distinctio ipsa eos? Sit illum quis architecto inventore laudantium in nesciunt saepe omnis. Rerum quibusdam beatae, in laudantium illo consectetur non corrupti assumenda hic, dolorem, voluptates ipsum totam reiciendis porro. Placeat, optio!"
            ],
            [
            "title" => "Makalah New 2",
            "slug" => "judul-post-kedua",
            "author" => "Indah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste earum consectetur itaque blanditiis, incidunt nihil, odio quas hic distinctio ipsa eos? Sit illum quis architecto inventore laudantium in nesciunt saepe omnis. Rerum quibusdam beatae, in laudantium illo consectetur non corrupti assumenda hic, dolorem, voluptates ipsum totam reiciendis porro. Placeat, optio!"
            ],
            [
            "title" => "Makalah Joseph",
            "slug" => "judul-post-ketiga",
            "author" => "Lestari",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste earum consectetur itaque blanditiis, incidunt nihil, odio quas hic distinctio ipsa eos? Sit illum quis architecto inventore laudantium in nesciunt saepe omnis. Rerum quibusdam beatae, in laudantium illo consectetur non corrupti assumenda hic, dolorem, voluptates ipsum totam reiciendis porro. Placeat, optio!"
            ]
        ];
    
       public static function all()

        {
            // kalo properti static kita pake nya self, kl dia properti biasa itu pake this->
            // return self::$blog_posts

            // collcetion didalam laravel
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
        //     $posts = self::$blog_posts;
        //     $post = [];
        //     foreach($posts as $p) 
        //  {
        //  if($p["slug"] == $slug) {
        //     $post = $p;
        //    }
        //   }
          return $posts->firstWhere('slug', $slug);
        }
}
