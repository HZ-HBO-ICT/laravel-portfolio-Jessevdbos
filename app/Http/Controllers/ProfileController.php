<?php

namespace App\Http\Controllers;

class ProfileController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        abort(500);
        return view('profile');
    }
}
