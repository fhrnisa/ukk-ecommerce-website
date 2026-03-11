<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Service;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Tambahkan Admin
        $this->call([
            AdminUserSeeder::class,
            ProductSeeder::class,
            ServiceSeeder::class,
        ]);

        //Tambah Test User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

    }
}
