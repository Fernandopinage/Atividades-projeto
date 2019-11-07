<?php

use Illuminate\Database\Seeder;
use App\statu;
class StatusTa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        statu::create([

            'status' =>'To do'
        ]);
    }
}
