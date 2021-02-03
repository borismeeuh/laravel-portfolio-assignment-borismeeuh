<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show($post): string
    {
        $posts = [
            'my-first-post' => 'Hello, this is my first post',
            'my-second-post' => 'Now im getting the hang of it'
        ];

        if(! array_key_exists($post, $posts)){
            abort(404, 'sorry, nothing found');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
