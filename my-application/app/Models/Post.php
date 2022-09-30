<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    protected $guarded = [];
    use HasFactory;

    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui maiores dolorem enim non saepe, aspernatur incidunt facere, id odio, eius delectus consequuntur aliquid nesciunt voluptatum molestias accusamus consequatur velit numquam sed. Enim aperiam placeat error excepturi aspernatur quae pariatur voluptates sint a dolorem delectus tempore beatae, nobis molestiae temporibus eaque nihil non obcaecati ab eum saepe, distinctio eveniet soluta. Deserunt dolores aperiam ea, iure quia inventore, deleniti vero illo eveniet minima, obcaecati qui perferendis aliquam consectetur perspiciatis harum totam aut?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias accusantium aspernatur pariatur, delectus possimus autem illo minus natus temporibus ratione illum tempora laudantium, doloremque deleniti! Voluptatum voluptates tenetur molestiae vero consequuntur eveniet maxime, rem harum? Quaerat quas illum pariatur id commodi laborum voluptates laboriosam adipisci debitis, alias tenetur veniam voluptatum dolorem fuga officiis dolorum in, repellat inventore ipsum iste! Obcaecati alias numquam architecto, veniam itaque neque recusandae odit rerum at tenetur quidem consequatur dignissimos tempore veritatis explicabo vitae ducimus pariatur, officiis corrupti culpa perspiciatis dolores expedita distinctio. Soluta nemo voluptatibus incidunt sunt blanditiis consectetur. Suscipit esse non officiis! Vero, odio."
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
