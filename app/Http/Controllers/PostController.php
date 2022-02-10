<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function show($name)
    {
        $post = Post::where('name', $name)->firstorfail();
        return view('post', [
            'post' => $post
        ]);
    }
}
