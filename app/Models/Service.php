<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'type',
        'options',
        'is_available',
        'image'
    ];

    protected $casts = [
        'options' => 'array',
        'price' => 'decimal:2',
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