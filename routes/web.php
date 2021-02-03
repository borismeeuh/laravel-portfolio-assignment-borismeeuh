<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/posts/{post}', [WelcomeController::class, 'show']);

Route::get('/', function (){
    return view('welcome');
});

Route::get('/home', function (){
    return view('welcome');
});

Route::get('/profile', function (){
    return view('profile');
});

Route::get('/dashboard', function (){
    return view('dashboard');
});

Route::get('/FAQ', function (){
    return view('FAQ');
});

Route::get('/view', function (){
    return view('view');
});

Route::get('/motivation', function (){
    return view('/motivation');
});






//Route::get([
//    '/' => view('welcome'),
//    '/home' => view('welcome'),
//    '/profile' => view('profile')
//]);
