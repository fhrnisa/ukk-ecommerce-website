<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
use HasFactory;

    protected $guarded = []; // Sesuaikan dengan guarded/fillable Anda

    // Relasi Order ke User (SETIAP order dimiliki oleh SATU user)
    public function user(): BelongsTo
    {
        // Asumsi kolom foreign key di tabel 'orders' adalah 'user_id'
        return $this->belongsTo(User::class); 
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
