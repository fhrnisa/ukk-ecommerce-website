<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'nama' => 'Cetak Dokumen',
                'deskripsi' => 'Cetak dokumen dalam ukuran A4, F4, HVS, pilihan warna hitam/putih',
                'harga' => 500,
                'jenis' => 'cetak_dokumen',
                'options' => json_encode([
                    'warna' => 'Hitam Putih',
                    'ukuran_kertas' => 'A4',
                    'jenis_kertas' => 'HVS 80gr',
                    'satuan' => 'per lembar'
                ]),
                'is_available' => true,
                'gambar' => 'percetakan.jpg'
            ],
            [
                'nama' => 'Pengetikan',
                'deskripsi' => 'Pengetikan cepat dan rapi untuk surat, laporan, dan dokumen lainnya.',
                'harga' => 2000,
                'jenis' => 'pengetikan',
                'options' => json_encode([
                    'warna' => '',
                    'ukuran_kertas' => 'A4  ',
                    'jenis_kertas' => 'HVS 80gr',
                    'satuan' => 'per lembar'
                ]),
                'is_available' => true,
                'gambar' => 'percetakan.jpg'
            ],
            [
                'nama' => 'Cetak Foto',
                'deskripsi' => 'Cetak foto mulai dari ukuran 3x4, 4x6, hingga 10R',
                'harga' => 12000,
                'jenis' => 'pengetikan',
                'options' => json_encode([
                    'warna' => '',
                    'ukuran_kertas' => 'A4  ',
                    'jenis_kertas' => 'HVS 80gr',
                    'satuan' => 'per lembar'
                ]),
                'is_available' => true,
                'gambar' => 'percetakan.jpg'
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
