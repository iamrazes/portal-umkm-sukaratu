<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = User::create([
            'name'=>'super admin',
            'email'=>'super.admin@example.com',
            'password'=>bcrypt('12345678')
        ]);

        $admin->assignRole('super admin');

        $user = User::create([
            'name'=>'admin',
            'email'=>'admin@example.com',
            'password'=>bcrypt('12345678')
        ]);

        $admin->assignRole('admin');
    }
}
