<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Menggunakan Model User yang sudah kita perbaiki
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Hapus data admin lama jika ada, untuk menghindari konflik
        User::where('email', 'admin@example.com')->delete();

        // 2. Buat akun Admin menggunakan Model User
        User::create([
            'name' => 'Admin Villa',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // Password DENGAN ENKRIPSI
        ]);
        
        echo "Admin user successfully created: admin@example.com (Password: password123)\n";
    }
}