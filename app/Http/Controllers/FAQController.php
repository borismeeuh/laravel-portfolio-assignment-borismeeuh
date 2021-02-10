<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        return view('FAQ', [
            'posts' => Faq::all()
        ]);
    }

    public function show()
    {

    }

    public function create(){
        return view('faqs.createFaq');
    }

    public function store(){
        $question = new Faq();
        $question->question = request('question');
        $question->answer = request('answer');
        $question->save();

        return redirect('/FAQ');
    }
    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
