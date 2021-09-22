<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "George",
                "firstname" => "Moula",
                "age" => 23,
                "role_id" => 1,
                "email" => "kirua16@protonmail.ch",
                "password" => bcrypt("a")
            ]
            ]);
    } 
}

