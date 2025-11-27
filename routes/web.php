<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Models\Product;

if (!class_exists(AdminMiddleware::class)) {
    die('ERROR DIAGNOSTIK: Kelas AdminMiddleware tidak ditemukan oleh Composer/Autoloader.');
}

// HALAMAN UTAMA (NORMAL USER HOME)
Route::get('/', function () {
    $products = Product::latest()->take(4)->get();
    return view('pages.welcome', compact('products'));
})->name('welcome');

// SEARCH
Route::get('/search', [ProductsController::class, 'search'])->name('products.search');

// SIGNUP
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

// LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ===========
// ADMIN AREA
// ===========
Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Product
        Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);

        // Orders
        Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    });


// SERVICES
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');

// PRODUCTS
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

// DETAIL PRODUCT
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');

// KERANJANG
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
});

// CHECKOUT
Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
});

// ORDER SUCCESS
Route::middleware('auth')->get('order/success/{order}', [CheckoutController::class, 'success'])->name('order.success');


// PROFILE
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/profile/notification', [ProfileController::class, 'notif'])->name('profile.notification');
Route::get('/profile/order-history', [ProfileController::class, 'orders'])->name('profile.order-history');


// EDIT PROFILE
Route::get('/edit-profile', [ProfileController::class, 'show'])->name('edit-profile.show');

