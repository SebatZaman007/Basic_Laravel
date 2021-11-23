<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sebat')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '1234567890',
            'address' => 'khulna,bangladesh'
        ]);
    }
}
