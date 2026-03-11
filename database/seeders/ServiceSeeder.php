<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Pengetikan Dokumen', 
                'price' => 2000, 
                'description' => 'Harga per lembar',
                'type' => 'Pengetikan' // Isi nilai type di sini
            ],
            [
                'name' => 'Cetak Dokumen', 
                'price' => 1000, 
                'description' => 'Kertas Glossy',
                'type' => 'Cetak Dokumen' // Isi nilai type di sini
            ],
            [
                'name' => 'Cetak Foto', 
                'price' => 3000, 
                'description' => 'Kertas Glossy',
                'type' => 'Cetak Foto' // Isi nilai type di sini
            ],
        ];
    
        foreach ($services as $s) {
            Service::create($s);
        }
    }
}
