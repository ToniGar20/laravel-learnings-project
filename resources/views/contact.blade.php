
@extends('layout')

@section('title', 'Contact Page')
@section('content')
    <h3><?php echo "Contact page"?></h3>

    <form method="post" action="{{ route('contact') }}">

        <!-- Seguridad en formularios, generando token -->
        @csrf

        <!--
            Cada input recogerá el valor antiguo (en caso de ser necesario. Lo serrores además se validarán con las reglas del controlador "MessageController")
            Esto segundo es así porque desde web.php llamamos al controlador y el método que contiene las validaciones cuando se hace un POST
        -->
        <label>
            <input name="name" placeholder="Nombre" value="{{ old('name') }}"> {!! $errors->first('name', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"> {!! $errors->first('email', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            <input name="subject" placeholder="Asunto" value="{{ old('subject') }}"> {!! $errors->first('subject', '<small>:message</small>') !!}
        </label>
        <br>
        <label>
            <textarea name="content" placeholder="Mensaje">{{ old('content') }}</textarea> {!! $errors->first('content', '<small>:message</small>') !!}
        </label>
        <br>
        <button>Enviar</button>
    </form>
@endsection
