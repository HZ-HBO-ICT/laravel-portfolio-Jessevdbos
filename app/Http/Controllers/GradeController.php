<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::all();

        return view('grades.index', ['grades' => $grades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));

        return redirect(route('grades.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', ['grade' => $grade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Grade  $grade
     * @return Application|RedirectResponse|\Illuminate\Http\Response|Redirector
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->update($this->validateGrade($request));

        return redirect(route('grades.index', $grade));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return Application|RedirectResponse|\Illuminate\Http\Response|Redirector
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect(route('grades.index'));
    }

    /**
     * @param Request $request request
     * @return array
     */
    private function validateGrade(Request $request): array
    {
        return $request->validate([
           'course_name' => '',
            'test_name' => '',
            'lowest_passing_grade' => 'required',
            'best_grade' => 'required'
        ]);
    }
}
