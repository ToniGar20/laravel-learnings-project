<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class FormController
{
    public function langSelection($lang){
        echo "Idioma elegido: " . $lang ;
        App::setLocale($lang);
        return view('form-example');
    }
}
