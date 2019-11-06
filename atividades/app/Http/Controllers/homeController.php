<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //-------------Acessando a tela home-----------------------------------------
    public function home(){
        return view('home');
    }
    //---------------------------------------------------------------------------

    
}
