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

    //-----------valida dados pegando dados do request---------------------------

    public function validarHome(Request $request){

     return dd($request);


    
        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->save();

        $atividade = new atividade;
        $atividade->atividade = $request->atividade;
        $atividade->save();

        $chamado = new chamado;
        $chamado->dataentrega = $request->dataentrega;
        $chamado->status = $request->status;
        $chamado->save();

       
      
    }

    //---------------------------------------------------------------------------

    
}
