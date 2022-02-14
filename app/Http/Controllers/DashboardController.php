<?php

namespace App\Http\Controllers;

use App\Http\Controllers\GradeController;
use App\models\Grade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DashboardController
{
    /**
     * @return Application|Factory|View
     */
    public function show()
    {
        $grades = Grade::all();

        return view('dashboard', [
            'grades' => $grades
        ]);
    }
}
