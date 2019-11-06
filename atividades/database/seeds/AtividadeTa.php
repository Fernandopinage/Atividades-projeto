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

            'atividade'       =>'codificar',
            'descricao'      =>'ex de condificar'
            
        ]);
    }
}
