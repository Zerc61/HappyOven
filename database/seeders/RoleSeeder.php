<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['nama_role' => 'admin',  'deskripsi' => 'Administrator sistem'],
            ['nama_role' => 'umkm',   'deskripsi' => 'Penjual / UMKM'],
            ['nama_role' => 'user',   'deskripsi' => 'Pembeli'],
            ['nama_role' => 'driver', 'deskripsi' => 'Kurir pengantar'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
    }
}
}
