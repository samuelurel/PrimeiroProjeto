<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function (\Illuminate\Http\Request $request){


    return view('teste');


});

Route::post('/teste', function (\Illuminate\Http\Request $request){


     $idade = $request->get('valor_idade');
     $peso = $request->get('valor_peso');

     $resultado = $idade * $peso;

    //return $resultado;


    return view('teste', ['calculo' => $resultado]);


});