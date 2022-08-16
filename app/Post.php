<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function index(Post $post)
    {
    return $post->get();

        return $post->get();
    }
}
