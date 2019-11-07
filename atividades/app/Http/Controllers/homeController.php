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

        
        $chamado = new chamado;
        $chamado->user_id = $request->id;
        $chamado->atividade_id = $request->id;
        $chamado->status = $request->status;
        $chamado->dataentrega = $request->data;
        $chamado->save();
        
        return dd($request);


      
    }

    //---------------------------------------------------------------------------

    
}
