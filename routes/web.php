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


//Routes with values for the variable "pageTitle"
Route::view('/', 'home', ['name' => 'Toni', 'pageTitle' => 'Home Page']);
Route::view('about', 'about', ['pageTitle' => 'About Page']);
Route::view('contact', 'contact', ['pageTitle' => 'Contact Page']);
