@extends('layout')

@section('content')
    <h1>Editar Mensaje</h1>
    @if (session()->has('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <form action="{{route('mensajes.update',$message->id)}}" method="post">
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        {!! method_field('PUT')!!}
        {!! csrf_field()!!}
        <label for="nombre">Nombre</label>
        <input class="form-control" type="text" name="name" value="{{$message->name}}">
        {!!$errors->first('name','<span class=error>:message</span>')!!}
        <br>
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" value="{{$message->email}}">
        {!!$errors->first('email','<span class=error>:message</span>')!!}
        <br>
        <label for="txa">Escribe tus weas</label>
        <br>
        <textarea class="form-control" name="mensaje" rows="10" cols="20">{{$message->mensaje}}</textarea>
        {!!$errors->first('mensaje','<span class=error>:message</span>')!!}
        <br>
        <input class="btn btn-primary" type="submit" name="env" value="enviar">
    </form>
@endsection
