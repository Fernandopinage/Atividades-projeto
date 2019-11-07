<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    //-------------Acessando a tela login-----------------------------------------
    public function login(){

        return view('login');
    }
    //---------------------------------------------------------------------------

    //------------------validando o login----------------------------------------

    public function validandoLogin(Request $request){


        
        //validando acesso 
        $dados = $request->only('email','password');

        if(Auth::attempt($dados)){

            return redirect('home');
        }else{
            return redirect('/');
        }
        
    }
    //--------------------------------------------------------------------------
}
