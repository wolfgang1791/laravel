@extends('layout')

@section('content')
    <h1>Usuarios</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Role</th>
                {{-- <th>Acciones</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    {{-- <td><a href="{{route('mensajes.show',$message->id)}}">{{$message->nombre}}</a></td> --}}
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->display_name}}</td>
                    {{-- <td>{{$message->email}}</td>
                    <td>
                        <a class="btn btn-info btn-xs" href="{{route('mensajes.edit',$message->id)}}">Editar</a>
                        <form style="display: inline" action="{{route('mensajes.destroy',$message->id)}}" method="post">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                            <button class="btn btn-danger btn-xs"type="submit" name="button">Eliminar</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
