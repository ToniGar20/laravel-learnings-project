<?php

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
