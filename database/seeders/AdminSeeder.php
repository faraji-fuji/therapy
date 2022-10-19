<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@therapy.com',
            'is_admin' => true,
            'email_verified_at' => 'null',
            'password' => Hash::make('1234'),
            'remember_token' => 'null',
            'created_at' => '2022-10-18 00:00:00',
            'updated_at' => '2022-10-18 00:00:00',
        ]);
    }
}
