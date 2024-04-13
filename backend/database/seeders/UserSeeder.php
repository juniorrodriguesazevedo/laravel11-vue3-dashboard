<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'email@email.com',
            'password' => '12345678',
        ])->assignRole(RoleEnum::ADMIN);

        User::factory()->count(500)->create();
    }
}
