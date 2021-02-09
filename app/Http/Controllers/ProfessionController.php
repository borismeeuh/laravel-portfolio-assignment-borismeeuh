<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function returnProfessionPage(): string
    {
        return view('profession');
    }
}
