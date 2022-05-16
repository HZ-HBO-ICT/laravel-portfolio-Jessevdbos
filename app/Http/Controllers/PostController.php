<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * @param $name string of the searched variable
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $name)
    {
        $post = Post::where('name', $name)->firstorfail();
        return view('post', [
            'post' => $post
        ]);
    }
}
