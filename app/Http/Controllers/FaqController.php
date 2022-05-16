<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

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
//        abort(404);
        $faqs = Faq::all();

        return view('faq', [
            'posts' => $faqs,
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
        Faq::create($this->validateFaq($request));

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
        $faq->update($this->validateFaq($request));

        return redirect(route('faqs.show', $faq));
    }

    /**
     * @param $id number of the article
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect(route('faqs.index'));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validateFaq(Request $request): array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => '',
        ]);
    }
}
