<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class basicAPI extends Controller
{
    public function getposts(){
        return Post::all();
    }
}
