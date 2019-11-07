<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\atividade;
use App\chamado;
use App\statu;

class homeController extends Controller
{
    //-------------Acessando a tela home-----------------------------------------
    public function home(){

        $atividade = atividade::all();
        $usuario = User::all();
        $status = statu::all();
       

        return view('home',compact('usuario','atividade','status'));
    }
    //---------------------------------------------------------------------------

    //-----------valida dados pegando dados do request---------------------------

    public function validarHome(Request $request){

        $atividade = atividade::find('name');
        $usuario = User::find('name');
/*
        $chamado = new chamado;
        $chamado->name = $request->name;
        $chamado->atividade = $request->atividade;
        $chamado->status = $request->status;
        $chamado->dataentrega = $request->data;
        $chamado->save();
*/
        return dd($request);


      
    }

    //---------------------------------------------------------------------------

    
}
