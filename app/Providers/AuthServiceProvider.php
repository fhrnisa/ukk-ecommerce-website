<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Pendaftaran Gate Anda harus berada di dalam metode boot()
        Gate::define('isAdmin', function ($user) {
            // Logika Gate: mengembalikan true jika kolom 'role' pengguna adalah 'admin'
            return $user->role === 'admin';
        });
    }
}