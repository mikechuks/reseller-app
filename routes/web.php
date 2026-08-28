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
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\MtnController;
use App\Http\Controllers\AirtelController;
use App\Http\Controllers\NineMobileController;
use App\Http\Controllers\TravelFlightController;
use App\Http\Controllers\TvSubscriptionController;
use App\Http\Controllers\GloController;
use App\Http\Controllers\AirtimeController;

Route::get('/', function () {return view('home');})->name('home');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/services', function () {return view('services');})->name('services');
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::get('/register', [RegController::class, 'index'])->name('register.index');
Route::get('/register', [RegController::class, 'create'])->name('register.create');
Route::post('/register', [RegController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {
Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('dashboard.show');
Route::get('/airtime', [AirtimeController::class, 'userDashboard'])->name('airtimes.show');
Route::get('/mtn', [MtnController::class, 'userDashboard'])->name('mtn-airtime.show');
Route::post('/mtn/airtime', [MtnController::class, 'buyAirtime'])->name('mtn-airtime.buy');
Route::get('/test-vtu', [MtnController::class, 'testVtu']);
Route::get('/test-airtime', [MtnController::class, 'testAirtime']);
Route::get('/airtel', [AirtelController::class, 'index'])->name('airtel-airtime.show');
Route::get('/glo', [GloController::class, 'index'])->name('glo-airtime.show');
Route::get('/nine-mobile', [NineMobileController::class, 'index'])->name('nine-mobile-airtime.show');
Route::get('/tv-subscription/dstv', [TvSubscriptionController::class,'dstv'])->name('dstv.show');
Route::get('/tv-subscription/gotv', [TvSubscriptionController::class,'gotv'])->name('gotv.show');
Route::get('/tv-subscription/startimes', [TvSubscriptionController::class,'startimes'])->name('startimes.show');
Route::get('/travel-flight', [TravelFlightController::class, 'userDashboard'])->name('travel-flight.show');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

//Users
Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/insert-users', [UserController::class, 'create'])->name('user.create');
Route::post('/insert-users', [UserController::class, 'store'])->name('user.store');
Route::get('/edit-users/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/update-users/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/delete-users/{user}', [UserController::class, 'destroy'])->name('user.destroy');

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
Route::get('/payments', [PaymentController::class, 'index'])->name('payment.index');
Route::get('/insert-payments', [PaymentController::class, 'create'])->name('payment.create');
Route::post('/insert-payments', [PaymentController::class, 'store'])->name('payment.store');
Route::get('/payments/{payment}', [PaymentController::class, 'edit'])->name('payment.edit');
Route::put('/payments/{payment}', [PaymentController::class, 'update'])->name('payment.update');
Route::delete('/payments/{payment}', [PaymentController::class, 'destroy'])->name('payment.destroy');

//Reviews
Route::get('/reviews', [ReviewsController::class, 'index'])->name('review.index');
Route::get('/insert-reviews', [ReviewsController::class, 'create'])->name('review.create');
Route::post('/insert-reviews', [ReviewsController::class, 'store'])->name('review.store');
Route::get('/reviews/{review}', [ReviewsController::class, 'edit'])->name('review.edit');
Route::put('/reviews/{review}', [ReviewsController::class, 'update'])->name('review.update');
Route::delete('/reviews/{review}', [ReviewsController::class, 'destroy'])->name('review.destroy');

});

