<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //memasukan data admin ke tabel admin
        DB::table('admin')->insert([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' =>Hash::make("12345678")
        ]);
    }
}
