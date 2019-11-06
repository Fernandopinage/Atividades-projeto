<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class atividadeController extends Controller
{
       //-------------Acessando a tela atividade-----------------------------------------
       public function atividade(){
        return view('atividade');
    }
    //---------------------------------------------------------------------------

}
