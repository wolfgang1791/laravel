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

Route::get('/', ['as'=>'home',function () {
    return view('home');
    //echo "<a href=".route('contactos').">Contactos</a>"; //nombre de la ruta
}]);

Route::get('/contactame', ['as' => 'contactos',function () { //nombre de la ruta
    return "Ginny I love you babe ";
}])->where('nombre','[A-Za-z]+');


Route::get('/saludo/{nombre?}',['as'=>'saludo', function ($nombre = 'GINEVRA') { // ? no-require
    //return view('saludo',['nombre'=>$nombre]);
    //return view('saludo')->with(['nombre'=>$nombre]);
    return view('saludo',compact('nombre'));
}])->where('nombre','[A-Za-z]+'); // validacion
