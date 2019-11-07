<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name'       =>'fernando',
            'email'      =>'fernando@nextem.com.br',
            'password'   => bcrypt('1234')
        ]);


    }
}
