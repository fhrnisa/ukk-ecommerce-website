<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;

// HALAMAN UTAMA (NORMAL USER HOME)
Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

Route::get('/search', [ProductsController::class, 'search'])->name('search');

// SIGNUP
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

// LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ADMIN MODE
Route::get('/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware(['auth', AdminMiddleware::class])
    ->middleware(['auth', AdminMiddleware::class]);

Route::prefix('admin')->name('admin.')->group(function (){
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
});

Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);



// SERVICES
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');

// PRODUCTS
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');

// DETAIL PRODUCT
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');

// KERANJANG
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
});

// PROFILE
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/profile/notification', [ProfileController::class, 'notif'])->name('profile.notification');
Route::get('/profile/order-history', [ProfileController::class, 'orders'])->name('profile.order-history');


// EDIT PROFILE
Route::get('/edit-profile', [ProfileController::class, 'show'])->name('edit-profile.show');
