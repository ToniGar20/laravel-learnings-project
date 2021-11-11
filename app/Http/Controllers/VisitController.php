<?php

namespace App\Http\Controllers;

class VisitController
{
    public function __invoke($visits)
    {
        setcookie("visits", $visits);
        return view ('visits-test');
    }
}
