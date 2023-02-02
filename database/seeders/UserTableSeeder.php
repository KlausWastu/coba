<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'klaus',
            'email' => 'klaus@coba.test',
            'password' => bcrypt('password'), 
        ]);
        // Assign admin untuk menjadi role admin 
        $admin->assignRole('admin');
    }
}
