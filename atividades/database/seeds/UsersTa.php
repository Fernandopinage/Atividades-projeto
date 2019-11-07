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

            'name'       =>'test',
            'email'      =>'test@nextem.com',
            'password'   => bcrypt('1234')
        ]);


    }
}
