<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mi sitio</title>
        <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHBrZOUnj4fN97Pf1Sq01Fs2A_x_fGa_Z_tto7ucgfWvOz2bdgGg"/>
        <style media="screen">
            .active{
                text-decoration: none;
                color:green;
            }

            .error{
                    color:red;
                    font-size: 12px;
            }
        </style>
    </head>
    <body>
        <header>
            {{-- <h1>{{request()->url()}}</h1> --}}
            @php
                function activeMenu($url)
                {
                    return request()->is($url)?'active':'';
                }
            @endphp
            <nav>
                <a class="{{activeMenu('/')}}" href="{{ route('home')}}">Inicio</a>
                <a class="{{activeMenu('saludo')}}" href="{{route('saludo','')}}">Saludo</a>
                <a class="{{activeMenu('mensajes/create')}}" href="{{route('mensajes.create')}}">Contacto</a>
                @if (auth()->guest())
                    <a class="{{activeMenu('mensajes')}}" href="{{route('login')}}">Login</a>
                @elseif(auth()->check())
                    <a class="{{activeMenu('mensajes')}}" href="{{route('mensajes.index')}}">Mensajes</a>
                    <a href="{{route('logout')}}">Cerrar Sesion de {{auth()->user()->email}}</a>
                @endif
            </nav>
        </header>
        @yield('content')
        <footer>Copyrigth {{date('Y')}}</footer>
    </body>
</html>
