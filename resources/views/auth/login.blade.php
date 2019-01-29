@extends('layout')

@section('content')
    <h1>Login</h1>
    <form action="login" method="post">
        {!! csrf_field() !!}
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit"  value="Ingresar">
    </form>
@endsection
