<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atividade extends Model
{
    //
    public function user(){
        return $this->hasOne('App\User', 'foreign_key');
    } 
    public function chamado(){
        return $this->hasOne('App\chamado', 'foreign_key');
    }
}
