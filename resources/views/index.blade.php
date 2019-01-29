@extends('layout')

@section('content')
    <h1>Todos los mensajes</h1>
    <table width="100%" border='1'>
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
                    <td><a href="{{route('messages.show',$message->id)}}">{{$message->nombre}}</a></td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->mensaje}}</td>
                    <td>
                        <a href="{{route('messages.edit',$message->id)}}">Editar</a>
                        <form style="display: inline" action="{{route('messages.destroy',$message->id)}}" method="post">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                            <button type="submit" name="button">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
