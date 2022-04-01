<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Controlador_Videojuegos extends Controller
{

    public function Api()
    {

        $datos = Http:: get('https://catfact.ninja/fact');

        $datos2 = json_decode($datos);

        return view('index',['datos'=>$datos2]);

    }

    public function Apifree()
    {

        $datos = Http:: get('https://catfact.ninja/fact');

        $datos ->json();

        return $datos;

    }


    public function index()
    {
        return view('index');
    }
}
