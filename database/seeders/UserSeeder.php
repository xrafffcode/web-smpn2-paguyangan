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
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@smpn2.sch.id',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');

        $petugas = User::create([
            'name' => 'Petugas',
            'email' => 'petugas@smpn2.sch.id',
            'password' => bcrypt('password'),
        ]);

        $petugas->assignRole('petugas');
    }
}
