<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * @return Grade[]|Application|Factory|View|\Illuminate\Database\Eloquent\Collection
     */
    public function show()
    {
        return Grade::all();
    }
}
