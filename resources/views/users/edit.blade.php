@extends('layout')

@section('content')
    <h1>Editar usuario</h1>
    @if (session()->has('info')) 
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <form class="" action="{{route('usuarios.update',$user->id)}}" method="post">
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        {!! method_field('PUT')!!}
        {!! csrf_field()!!}
        <label for="nombre">Nombre</label>
        <input class="form-control" type="text" name="name" value="{{$user->name}}">
        {!!$errors->first('name','<span class=error>:user</span>')!!}
        <br>
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" value="{{$user->email}}">
        {!!$errors->first('email','<span class=error>:user</span>')!!}
        <br>
        <br>
        <input class="btn btn-primary" type="submit" name="env" value="enviar">
    </form>
@endsection
