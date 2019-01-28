<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', ['as'=>'home',function () {
    return view('home');
    //echo "<a href=".route('contactos').">Contactos</a>"; //nombre de la ruta
}]);
*/
Route::get('/', ['as'=>'home','uses'=>'PagesController@home']);
/*
Route::get('/contactame', ['as' => 'contactos',function () { //nombre de la ruta
    return view('contactos');
}]);
*/
Route::get('/contactame', ['as' => 'contactos','uses'=>'PagesController@contact']);

Route::get('/saludo/{nombre?}',['as'=>'saludo', function ($nombre = 'GINEVRA') { // ? no-require
    //return view('saludo',['nombre'=>$nombre]);
    //return view('saludo')->with(['nombre'=>$nombre]);
    $html = "<h2>Contenido html</h2>";// ingresado por formulario
    $script = "<script>alert('xss-cross site scripting')</script>"; // inyeccion de codigo

    $consolas = [
        'shit',
        'fuck',
        'fucking shit'
    ];

    return view('saludo',compact('nombre','html','script','consolas'));
}])->where('nombre','[A-Za-z]+'); // validacion

Route::get('/saludo/{nombre?}',['as'=>'saludo', 'uses'=>'PagesController@saludo'])->where('nombre','[A-Za-z]+'); // validacion
