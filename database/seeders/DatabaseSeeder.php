<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan ini ada jika Anda memanggil User::factory() atau User::updateOrCreate()
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // PENTING: Panggil AdminUserSeeder agar akun admin dibuat.
        $this->call([
            AdminUserSeeder::class,
            // Jika ada seeder lain, tambahkan di sini
        ]);
        
        // Opsional: Buat user dummy
        // User::factory(10)->create(); 
    }
}