<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TesteController extends Controller
{
    public function teste(Request $request)
    {
        $idade = $request->get('valor_idade');
        $peso = $request->get('valor_peso');

        $resultado = $idade * $peso;

        //return $resultado;


        return view('teste', ['calculo' => $resultado]);
    }

    public function exibirteste()
    {
        return view('teste');
    }
    
}
