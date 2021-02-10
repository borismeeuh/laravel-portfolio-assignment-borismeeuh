<?php

use App\Http\Controllers\WelcomeController;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\FAQController;
use \App\Http\Controllers\ViewController;
use \App\Http\Controllers\MotivationController;
use \App\Http\Controllers\ProfessionController;
use \App\Http\Controllers\ArticleController;

use \App\Http\Controllers\PostController;

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

//Route::get('posts/{post}', [PostController::class, 'show']);

Route::get('/', [WelcomeController::class, 'returnHomePage']);

Route::get('/home', [WelcomeController::class, 'returnHomePage']);

Route::get('/profile', [ProfileController::class, 'returnProfilePage']);

Route::get('/dashboard', [DashboardController::class, 'returnDashboardPage']);

Route::get('/FAQ', [FAQController::class, 'index']);
Route::post('/FAQ', [FAQController::class, 'store']);
Route::get('/FAQ/createFaq', [FAQController::class, 'create']);

Route::get('/motivation', [MotivationController::class, 'returnMotivationPage']);

Route::get('/view', [ViewController::class, 'returnViewPage']);

Route::get('/profession', [ProfessionController::class, 'index']);
Route::post('/profession', [ProfessionController::class, 'store']);
Route::get('/profession/create', [ProfessionController::class, 'create']);
Route::get('/profession/{profession}', [ProfessionController::class, 'show']);







