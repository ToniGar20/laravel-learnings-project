<?php

use App\Http\Controllers\VisitController;
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

// Default route of laravel's project
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'home');
Route::view('about', 'about');
Route::view('contact', 'contact');

//Using a controller to show a URL: url, class to use, method to call
Route::get('/visits', VisitController::class,'__invoke()');

//Test for lang translate at this view!
Route::view('/welcome-toni', 'welcome-translate')->name("translate-test");
