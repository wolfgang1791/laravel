<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Mi sitio</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="<?php echo route('home'); ?>">Inicio</a>
                <a href="<?php echo route('saludo','') ?>">Saludo</a>
                <a href="<?php echo route('contactos'); ?>">Contacto</a>
            </nav>
        </header>
        @yield('content')
        <footer>Copyrigth {{date('Y')}}</footer>
    </body>
</html>
