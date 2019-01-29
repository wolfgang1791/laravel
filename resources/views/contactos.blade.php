@extends('layout')

@section('content')
    <h1>Contactos</h1>
    <h2>Escribeme</h2>
    <form class="" action="contacto" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{old('nombre')}}">
        {!!$errors->first('nombre','<span class=error>:message</span>')!!}
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" value="{{old('email')}}">
        {!!$errors->first('email','<span class=error>:message</span>')!!}
        <br>
        <label for="txa">Escribe tus weas</label>
        <br>
        <textarea name="txa" rows="4" cols="8" value="{{old('txa')}}"></textarea>
        {!!$errors->first('txa','<span class=error>:message</span>')!!}
        <br>
        <input type="submit" name="env" value="enviar">
    </form>
@endsection
