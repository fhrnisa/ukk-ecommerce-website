<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'perisai.computer@gmail.com'],
            [
                'name' => 'Perisai',
                'password' => Hash::make('tokonisa'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
        ]);
    }
}
