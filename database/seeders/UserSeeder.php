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
        User::create ([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin123'),
            'role' => 1, // Pastikan ID ini ada di tabel roles
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create ([
            'name' => 'Donatur',
            'email' => 'donatur@mail.com',
            'password' => bcrypt('donatur123'),
            'role' => 2, // Pastikan ID ini ada di tabel roles
            'created_at' => now(),
            'updated_at' => now(),
        ]);



    }
}
