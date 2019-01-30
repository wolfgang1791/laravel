<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mi sitio</title>
        <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHBrZOUnj4fN97Pf1Sq01Fs2A_x_fGa_Z_tto7ucgfWvOz2bdgGg"/>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
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

            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link {{activeMenu('/')}}" href="{{ route('home')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{activeMenu('saludo')}}" href="{{route('saludo','')}}">Saludo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{activeMenu('mensajes/create')}}" href="{{route('mensajes.create')}}">Contacto</a>
              </li>
              @if (auth()->guest())
                  <li class="nav-item">
                    <a class="nav-link {{activeMenu('mensajes')}}" href="{{route('login')}}">Login</a>
                  </li>
              @elseif(auth()->check())
                  <li class="nav-item">
                     <a class="nav-link {{activeMenu('mensajes')}}" class="{{activeMenu('mensajes')}}" href="{{route('mensajes.index')}}">Mensajes</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{activeMenu('mensajes')}}" href="{{route('logout')}}">Cerrar Sesion de {{auth()->user()->email}}</a>
                  </li>
              @endif
              <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
            </ul>

        </header>

        <div class="container">
            @yield('content')
            <footer>Copyrigth {{date('Y')}}</footer>
        </div>
        <script type="text/javascript" src="/js/all.js"></script>
    </body>
</html>
