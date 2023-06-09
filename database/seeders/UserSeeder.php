<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'npm' => '2108107010068',
            'password' => bcrypt('0000'),
            'remember_token' => Str::random(60),
        ]);
    }
}