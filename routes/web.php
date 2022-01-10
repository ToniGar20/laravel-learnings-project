<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PhonebookController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
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

Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');

//Using a controller to show a URL: url, class to use, method to call
Route::get('/visits', VisitController::class,'__invoke')->name('visits');
Route::get('/controller-test', TestController::class, '__invoke');

//Route to call the validation of the inputs of the form!
Route::post('contact', [MessageController::class, 'store']);

//2 tests for lang translate at this view!
//Route::get('/{local}/welcome-toni', function ($local) {
//    app()->setLocale($local);
//    return view('welcome-translate');
//})->name("translate-test");

// Second test, using a controller instead of doing php code logic on routes
// URL path for language
Route::get('/{lang}/form', [FormController::class, 'langSelection']);

// TODO Middleware (10/12/21)
//test using a middleware
//Route::get('/middleware-test', function (){});

Route::get('phonebook', function (){
   return view('phonebook');
});
//Name of the url and the controller methods to call that will add all the methods of a resource
Route::resource('phonebook', PhonebookController::class);
