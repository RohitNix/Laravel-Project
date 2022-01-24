<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class aspirantsLogin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aspirants_login')->insert([
            'Name'=>'Rohit',
            'Email'=>'dhonirohit81@gmail.com',
            'Phone'=>'986756533',
            'Password'=>'admin@123'
        ]);
    }
}
