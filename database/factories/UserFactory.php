<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan tabel 'users' ada
        if (DB::getSchemaBuilder()->hasTable('users')) {
            
            // Hapus data lama (jika ada) untuk menghindari duplikasi
            DB::table('users')->where('email', 'admin@example.com')->delete();

            // Masukkan data admin baru
            DB::table('users')->insert([
                'name' => 'Admin Villa',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'), // Password: password123
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            echo "Admin user created: admin@example.com\n";
        } else {
            echo "Table 'users' does not exist. Please run the default migrations first.\n";
        }
    }
}