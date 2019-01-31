@extends('layout')

@section('content')
    <h1>Contactos</h1>
    @if(session()->has('info'))
        <h3>{{session('info')}}</h3>
    @else
        <h2>Escribeme</h2>
        <form class="" action="{{route('mensajes.store')}}" method="post">
            {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
            {!! csrf_field()!!}
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="name" value="{{old('name')}}">
            {!!$errors->first('name','<span class=error>:message</span>')!!}
            <br>
            <label for="email">Email</label>
            <input class="form-control"  type="text" name="email" value="{{old('email')}}">
            {!!$errors->first('email','<span class=error>:message</span>')!!}
            <br>
            <label for="mensaje">Escribe tus weas</label>
            <br>
            <textarea class="form-control" name="mensaje" rows="4" cols="8" value="{{old('mensaje')}}"></textarea>
            {!!$errors->first('mensaje','<span class=error>:message</span>')!!}
            <br>
            <input class="btn btn-primary" type="submit" name="env" value="enviar">
        </form>
    @endif
@endsection
