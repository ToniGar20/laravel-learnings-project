@extends('layout')

@section('title', 'Visits Test')
@section('content')
    <h2>Contador de sesiones</h2>
    <p>
        <?php
        if (isset($_COOKIE["visits"])) {
            setcookie("visits", ++$_COOKIE["visits"]);
            echo "Vista número " . $_COOKIE["visits"];
        } else {
            echo "Eres la primera visita :)";
            setcookie("visits", $_COOKIE["visits"] = 1);
        }

        $value = $_COOKIE["visits"];
        ?>
    </p>
@endsection
