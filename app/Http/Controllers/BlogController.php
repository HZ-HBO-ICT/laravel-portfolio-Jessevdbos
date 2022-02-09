<?php

namespace App\Http\Controllers;

class BlogController
{
    public function showblog() {
        return view('blog');
    }

    public function showfeedback() {
        return view('feedback');
    }

    public function showict() {
        return view('ict');
    }

    public function showervaring() {
        return view('programmeerervaring');
    }

    public function showswot() {
        return view('swot');
    }

    public function showstudiekeuze() {
        return view('studiekeuze');
    }
}
