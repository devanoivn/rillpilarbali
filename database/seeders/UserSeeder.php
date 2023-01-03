<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt ('1'),
            'status' => 'admin'
        ]);
        
        User::create([
            'name' => 'Member',
            'email' => 'member@gmail.com',
            'password' => bcrypt ('password'),
            'status' => 'member'
        ]);
    }
}
