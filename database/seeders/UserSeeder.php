<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
          [
            "name" => "Alina",
            "email" => "alina123@gmail.com",
            "address"=>"Mandalay",
            "phone" => "097765457",
            "password"=>Hash::make("123"),
            "role"=>"admin"
          ],

          [
            "name" => "Louis",
            "email" => "louis123@gmail.com",
            "address"=>"Yangon",
            "phone" => "096578989",
            "password"=>Hash::make("123"),
            "role"=>"user"
          ],
          ]);
    }
}
