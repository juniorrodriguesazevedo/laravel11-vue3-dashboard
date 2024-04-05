<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'super_admin', 'description' => 'Super Administrador'],
            ['name' => 'admin', 'description' => 'Administrador'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
