<?php

namespace App\Http\Controllers;

use App\Models\Error;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Error::create($this->validateError($request));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function show(Error $error)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function edit(Error $error)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Error $error)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Error  $error
     * @return \Illuminate\Http\Response
     */
    public function destroy(Error $error)
    {
        //
    }

    /**
     * @param Request $request request
     * @return array
     */
    private function validateError(Request $request): array
    {
        return $request->validate([
            'name' => 'required',
            'code' => 'required',
            'opmerking' => 'required'
        ]);
    }
}
