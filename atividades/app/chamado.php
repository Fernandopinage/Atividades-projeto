<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chamado extends Model
{
    //
    public function user(){
        return $this->hasOne('App\User', 'foreign_key');
    }
    public function atividade(){
        return $this->hasOne('App\atividade', 'foreign_key');
    }
}
