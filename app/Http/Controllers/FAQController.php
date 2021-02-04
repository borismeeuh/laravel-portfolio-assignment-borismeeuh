<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function returnFAQPage()
    {
        return view('FAQ', [
            'posts' => Faq::all()
        ]);
    }
}
