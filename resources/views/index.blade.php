@extends('layout')

@section('content')
    <h1>Todos los mensajes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td><a href="{{route('mensajes.show',$message->id)}}">{{$message->name}}</a></td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->mensaje}}</td>
                    <td>
                        <a class="btn btn-info btn-xs" href="{{route('mensajes.edit',$message->id)}}">Editar</a>
                        <form style="display: inline" action="{{route('mensajes.destroy',$message->id)}}" method="post">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                            <button class="btn btn-danger btn-xs"type="submit" name="button">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
