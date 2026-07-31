<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/settings', [SettingsController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'login'])->name('login.store');

Route::get('/register', [RegController::class, 'index'])->name('register.index');
Route::get('/register', [RegController::class, 'create'])->name('register.create');
Route::post('/register', [RegController::class, 'store'])->name('register.store');

//Products
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/insert-product', [ProductController::class, 'create'])->name('product.create');
Route::post('/insert-product', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

//Category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/insert-category', [CategoryController::class, 'create'])->name('category.create');
Route::post('/insert-category', [CategoryController::class, 'store'])->name('category.store');

Route::get('/categories/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

//Product Image
Route::get('/product-images', [ProductImageController::class, 'index'])->name('productImg.index');
Route::get('/insert-product-images', [ProductImageController::class, 'create'])->name('productImg.create');
Route::post('/insert-product-images', [ProductImageController::class, 'store'])->name('productImg.store');
Route::get('/product-imgs/{productImage}', [ProductImageController::class, 'edit'])->name('productImg.edit');
Route::put('/product-imgs/{productImage}', [ProductImageController::class, 'update'])->name('productImg.update');
Route::delete('/product-imgs/{productImage}', [ProductImageController::class, 'destroy'])->name('productImg.destroy');

//Order
Route::get('/order-items', [OrderController::class, 'index'])->name('order.index');
Route::get('/insert-order', [OrderController::class, 'create'])->name('order.create');
Route::post('/insert-order', [OrderController::class, 'store'])->name('order.store');
Route::get('/order-item/{order}', [OrderController::class, 'edit'])->name('order.edit');
Route::put('/order-item/{order}', [OrderController::class, 'update'])->name('order.update');
Route::delete('/order-item/{order}', [OrderController::class, 'destroy'])->name('order.destroy');

//Payments
Route::get('/payments', [OrderController::class, 'index'])->name('payment.index');
Route::get('/insert-payments', [OrderController::class, 'create'])->name('payment.create');
Route::post('/insert-payments', [OrderController::class, 'store'])->name('payment.store');
Route::get('/payments/{payment}', [OrderController::class, 'edit'])->name('payment.edit');
Route::put('/payments/{payment}', [OrderController::class, 'update'])->name('payment.update');
Route::delete('/payments/{payment}', [OrderController::class, 'destroy'])->name('payment.destroy');

