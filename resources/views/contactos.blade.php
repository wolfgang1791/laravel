@extends('layout')

@section('content')
    <h1>Contactos</h1>
    <h2>Escribeme</h2>
    <form class="" action="contacto" method="post">
        <input type="text" name="nombre">
        <input type="text" name="email" >
        <textarea name="name" rows="8" cols="80"></textarea>
        <input type="submit" name="env" value="enviar">
    </form>
@endsection
