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

            'name'       =>'nextem',
            'email'      =>'text@nextem.com.br',
            'password'   => bcrypt('1234')
        ]);


    }
}
