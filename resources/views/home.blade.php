
@extends('layout')

@section('title', 'Home Page')
@section('content')
    <h1>Home</h1>
    Welcome to the site {{ $name ?? "Guest" }}
@endsection
