<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name'=>'owner',
            'email'=>'owner@gmail.com',
            'role'=>'admin',
            'password'=>bcrypt(123456)
        ]);
        
        User::create([
            'name'=>'customer',
            'email'=>'customer@gmail.com',
            'role'=>'customer',
            'password'=>bcrypt(123456)
        ]);
    }
}
