@extends('layout')

@section('content')
    <h1>Editar Mensaje</h1>
    <form class="" action="{{route('messages.update',$message->id)}}" method="post">
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        {!! method_field('PUT')!!}
        {!! csrf_field()!!}
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{$message->nombre}}">
        {!!$errors->first('nombre','<span class=error>:message</span>')!!}
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" value="{{$message->email}}">
        {!!$errors->first('email','<span class=error>:message</span>')!!}
        <br>
        <label for="txa">Escribe tus weas</label>
        <br>
        <textarea name="txa" rows="10" cols="20">{{$message->mensaje}}</textarea>
        {!!$errors->first('txa','<span class=error>:message</span>')!!}
        <br>
        <input type="submit" name="env" value="enviar">
    </form>
@endsection
