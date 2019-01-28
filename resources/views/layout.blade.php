<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mi sitio</title>
        <style media="screen">
            .active{
                text-decoration: none;
                color:green;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>{{request()->url()}}</h1>
            @php
                function activeMenu($url)
                {
                    return request()->is($url)?'active':'';
                }
            @endphp
            <nav>
                <a class="{{activeMenu('/')}}" href="{{ route('home')}}">Inicio</a>
                <a class="{{activeMenu('saludo')}}" href="{{route('saludo','')}}">Saludo</a>
                <a class="{{activeMenu('contactame')}}" href="{{route('contactos')}}">Contacto</a>
            </nav>
        </header>
        @yield('content')
        <footer>Copyrigth {{date('Y')}}</footer>
    </body>
</html>
