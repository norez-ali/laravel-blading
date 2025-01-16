<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'role_id' => Role::ADMIN,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678')
            ]
        );
        User::create(
            [
                'role_id' => Role::USER,
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678')
            ]
        );
    }
}
