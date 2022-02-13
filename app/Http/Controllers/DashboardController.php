<?php

namespace App\Http\Controllers;

use App\Http\Controllers\GradeController;
use App\models\Grade;

class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        $grades = Grade::all();

        return view('dashboard', [
            'grades' => $grades
        ]);
    }
}
