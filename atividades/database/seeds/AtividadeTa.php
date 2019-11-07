<?php

use Illuminate\Database\Seeder;
use App\atividade;
class AtividadeTa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        atividade::create([

            'atividade'       =>'text2',
            'descricao'       =>'ex de text2',
            'dataentrega'     =>'2019-11-06'
            
        ]);
    }
}
