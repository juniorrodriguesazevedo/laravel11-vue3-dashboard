<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminPermissions = [
            ['name' => 'admin_view', 'description' => 'Visualiza'],
            ['name' => 'admin_create', 'description' => 'Criar'],
            ['name' => 'admin_edit', 'description' => 'Editar'],
            ['name' => 'admin_delete', 'description' => 'Deletar']
        ];

        foreach ($adminPermissions as $permission) {
            Permission::create($permission)->assignRole(RoleEnum::ADMIN);
        }
    }
}
