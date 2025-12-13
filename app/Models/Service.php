<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Service extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'jenis',
        'options',
        'is_available',
        'gambar'
    ];

    protected $casts = [
        'options' => 'array',
        'harga' => 'decimal:2',
        'is_available' => 'boolean',
    ];

    // Accessor untuk format harga
    protected function hargaFormatted(): Attribute
    {
        return Attribute::make(
            get: fn () => 'Rp ' . number_format($this->harga, 0, ',', '.')
        );
    }

    // Scope untuk layanan tersedia
    public function scopeTersedia($query)
    {
        return $query->where('is_available', true);
    }
}