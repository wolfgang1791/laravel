<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contactos');
    }

    public function saludo($nombre = 'GINEVRA')
    {
        $html = "<h2>Contenido html</h2>";// ingresado por formulario
        $script = "<script>alert('xss-cross site scripting')</script>"; // inyeccion de codigo

        $consolas = [
            'shit',
            'fuck',
            'fucking shit'
        ];

        return view('saludo',compact('nombre','html','script','consolas'));
    }
}
