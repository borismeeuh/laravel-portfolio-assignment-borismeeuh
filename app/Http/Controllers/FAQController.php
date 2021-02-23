<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class FAQController extends Controller
{
    public function index()
    {
        return view('FAQ', [
            'faqs' => Faq::all()
        ]);
    }

    public function show()
    {

    }

    public function create()
    {
        return view('faqs.createFaq');
    }

    public function store(Request $request)
    {
        Faq::create($this->validateQuestion($request));
        return redirect('/FAQ');
    }

    public function edit(Faq $faq)
    {
        return view('faqs.editFaq', compact('faq'));
    }

    public function update(Faq $faq, Request $request)
    {
        dd('update');
        $faq->update($this->validateQuestion($request));
        return redirect(route('faq.index', $faq));
    }

    public function destroy(Faq $faq)
    {
        dd('destroy');
        Faq::findorfail($faq->id)->destroy($faq->id);
        return redirect(route('faq.index'));
    }

    /**
     * @return array
     */
    public function validateQuestion($request): array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }
}
