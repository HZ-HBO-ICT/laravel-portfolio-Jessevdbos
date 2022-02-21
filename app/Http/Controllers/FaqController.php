<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use http\Env\Request;

class FaqController
{
    /**
     * @param $id number of the article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Faq $faq)
    {
        return view('faqPosts.show', ['faq' => $faq]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Faq::all();



        return view('faq', [
            'posts' => $posts,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('faqPosts.create');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $faq = new Faq();

        $faq->question = $request;
        $faq->answer = $request;
        $faq->link = $request;

        $faq->save();

        return redirect(route('faqs.index'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Faq $faq)
    {
        return view('faqPosts.edit', ['faq' => $faq]);
    }

    /**
     * @param $id number of the article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->question = $request;
        $faq->answer = $request;
        $faq->link = $request;
        $faq->save();

        return redirect(route('faqs.show', $faq));
    }

    /**
     * @param $id number of the article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($faq)
    {
        Faq::destroy($faq);

        return redirect(route('faqs.index'));
    }
}
