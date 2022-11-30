<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests\validadorDiario;

class controladorVista extends Controller
{

    public function procesarRecuerdo(validadorDiario $req){

        //TIPOS DE RETURN PARA TRAER DATOS

        return redirect('registrar')->with('confirmacion','Se guardo correctamente');

        //return $req->all();
        //return $req->path();
        //return $req->url();
        //return $req->ip();



    }

    public function showWelcome(){
        return view('welcome');
    }

    public function showHome(){
        return view('Home');
    }

    public function showIngresar(){
        return view('Registrar');
    }

    public function showRecuerdos(){
        return view('Recuerdo');
    }
}
