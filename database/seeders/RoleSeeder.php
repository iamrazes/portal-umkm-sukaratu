<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $superadmin = Role::create([
            'name'=>'super admin'


        ]);

        $admin = Role::create([
            'name'=>'admin'

        ]);

        $superadmin->syncPermissions(['system-access', 'content-access' ]);
        $admin->syncPermissions(['content-access']);
    }
}
