<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(){

        //request() es un método inherente a la clase Request usado para no tener que pasar por parámetro en el método store() absolutamente nada.
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);

        return 'Datos validados';
    }
}
