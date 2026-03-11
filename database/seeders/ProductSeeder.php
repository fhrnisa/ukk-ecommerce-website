<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'product_code' => 'ATK-001',
                'name' => 'Pulpen Standard AE7',
                'description' => 'Pulpen Standard yang bagus dan jelas',
                'image' => 'pulpen-ae7-hitam.jpg',
                'price' => 3000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'ATK-002',
                'name' => 'Spidol Kecil',
                'description' => 'Spidol kecil yang bagus',
                'image' => 'spidol-kecil.jpg',
                'price' => 3000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'ATK-003',
                'name' => 'Lem Stik',
                'description' => 'Pulpen Standard yang bagus dan jelas',
                'image' => 'glue-stick-kenko.jpg',
                'price' => 3000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'ATK-004',
                'name' => 'Lakban Bening Besar',
                'description' => 'Pulpen Standard yang bagus dan jelas',
                'image' => 'lakban-bening.jpg',
                'price' => 3000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'ATK-005',
                'name' => 'Solasi Bening Kecil',
                'description' => 'Pulpen Standard yang bagus dan jelas',
                'image' => 'solasi-bening-kecil.jpg',
                'price' => 3000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'ATK-006',
                'name' => 'Lakban Hitam',
                'description' => 'Pulpen Standard yang bagus dan jelas',
                'image' => 'lakban-hitam.jpg',
                'price' => 3000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'ATK-007',
                'name' => 'Binder Clips',
                'description' => 'Pulpen Standard yang bagus dan jelas',
                'image' => 'binder-clips-no-111.jpg',
                'price' => 3000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'ATK-008',
                'name' => 'Nota Kontan 1 Ply',
                'description' => 'Pulpen Standard yang bagus dan jelas',
                'image' => 'nota-kontan-1ply.jpg',
                'price' => 4000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'ATK-009',
                'name' => 'Nota Kontan 2  Ply',
                'description' => 'Pulpen Standard yang bagus dan jelas',
                'image' => 'nota-kontan-2ply.jpg',
                'price' => 5000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_code' => 'ATK-010',
                'name' => 'Paper Clip',
                'description' => 'Pulpen Standard yang bagus dan jelas',
                'image' => 'trigonal-paper-clips-no-3.jpg',
                'price' => 3000,
                'stock' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];


        foreach ($products as $p) {
            Product::create($p);
        }

        // 2. Data Tambahan (Dummy Acak)
        // Agar toko terlihat ramai di awal
        // Product::factory(20)->create();

        \App\Models\Product::insert($products);
    }
}
