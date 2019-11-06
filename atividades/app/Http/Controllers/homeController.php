<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\atividade;
use App\chamado;
class homeController extends Controller
{
    //-------------Acessando a tela home-----------------------------------------
    public function home(){

        $atividade = atividade::all();
        $usuario = User::all();
        $chamado = chamado::all();

        return view('home',compact('usuario','atividade','chamado'));
    }
    //---------------------------------------------------------------------------

    
}
