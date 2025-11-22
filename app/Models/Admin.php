<?php

namespace App\Models;

class Admin extends User
{
    protected $table = 'users';

    // Hanya menampilkan user dengan role admin
    protected static function booted()
    {
        static::addGlobalScope('admin', function ($query) {
            $query->where('role', 'admin');
        });
    }
}
