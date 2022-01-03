
@extends('layout')

@section('title', 'Contact Page')
@section('content')
    <h3><?php echo "Contact page"?></h3>
    <form method="post" action="{{ route('contact') }}">

        @csrf
        <label>
            <input type="text" name="name" placeholder="Nombre">
        </label><br>
        <label>
            <input type="email" name="email" placeholder="Email">
        </label><br>
        <label>
            <input type="text" name="subject" placeholder="Asunto">
        </label><br>
        <label>
            <textarea name="content" placeholder="Mensaje"></textarea>
        </label><br>
        <button>Enviar</button>
    </form>
@endsection
