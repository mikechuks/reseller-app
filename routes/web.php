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
use App\Http\Controllers\ProfileSettingsController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\AIPromptController;

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
Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
Route::get('/mtn', [MtnController::class, 'userDashboard'])->name('mtn-airtime.show');
Route::post('/mtn/airtime', [MtnController::class, 'buyAirtime'])->name('mtn-airtime.buy');
Route::get('/test-vtu', [MtnController::class, 'testVtu']);
Route::get('/test-airtime', [MtnController::class, 'testAirtime']);
Route::get('/airtel', [AirtelController::class, 'index'])->name('airtel-airtime.show');
Route::get('/glo', [GloController::class, 'index'])->name('glo-airtime.show');
Route::get('/test-glo-airtime', [GloController::class, 'testAirtime']);
Route::get('/nine-mobile', [NineMobileController::class, 'index'])->name('nine-mobile-airtime.show');
Route::get('/tv-subscription/dstv', [TvSubscriptionController::class,'dstv'])->name('dstv.show');
Route::get('/tv-subscription/gotv', [TvSubscriptionController::class,'gotv'])->name('gotv.show');
Route::get('/tv-subscription/startimes', [TvSubscriptionController::class,'startimes'])->name('startimes.show');
Route::get('/profile', [ProfileSettingsController::class, 'index'])->name('profile');
// Profile settings page
Route::get('/profile-settings', [ProfileSettingsController::class, 'index'])->name('profile.settings');
// Update profile information
Route::put('/profile-settings/profile', [ProfileSettingsController::class, 'updateProfile'])->name('profile.update');
// Update profile photo
Route::post('/profile-settings/photo', [ProfileSettingsController::class, 'updatePhoto'])->name('profile.photo.update');
// Update password
Route::put('/profile-settings/password', [ProfileSettingsController::class, 'updatePassword'])->name('profile.password.update');
//Notification
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::post('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
Route::post('/notifications/read-all', [NotificationController::class, 'markAllAsRead'])->name('notifications.read.all');

//AI Prompts
Route::get('/prompt-text', [AIPromptController::class, 'index'])->name('prompt-text.show');

/*
|--------------------------------------------------------------------------
| AI Prompts
|--------------------------------------------------------------------------
*/
Route::prefix('ai-prompts')->name('ai-prompts.')->group(function () {
    // Main AI Prompt dashboard page
    Route::get('/', [AIPromptController::class, 'index'])->name('index');
    // AI Prompt navigation pages
    Route::get('/content', [AIPromptController::class, 'aiprompts'])->name('aiprompts');
    Route::get('/cinematic', [AIPromptController::class, 'cinematic'])->name('cinematic');
    Route::get('/social-media', [AIPromptController::class, 'socialMedia'])->name('social-media');
    Route::get('/education', [AIPromptController::class, 'education'])->name('education');
    Route::get('/business', [AIPromptController::class, 'business'])->name('business');
    Route::get('/product-ads', [AIPromptController::class, 'productAds'])->name('product-ads');
    Route::get('/personal-branding', [AIPromptController::class, 'personalBranding'])->name('personal-branding');
    Route::get('/storytelling', [AIPromptController::class, 'storytelling'])->name('storytelling');
    Route::get('/comedy', [AIPromptController::class, 'comedy'])->name('comedy');
    Route::get('/motivational', [AIPromptController::class, 'motivational'])->name('motivational');
    Route::get('/ai-technology', [AIPromptController::class, 'aiTechnology'])->name('ai-technology');
    Route::get('/coding-programming', [AIPromptController::class, 'codingProgramming'])->name('coding-programming');
    Route::get('/money-finance', [AIPromptController::class, 'moneyFinance'])->name('money-finance');
    Route::get('/lifestyle', [AIPromptController::class, 'lifestyle'])->name('lifestyle');
    Route::get('/food', [AIPromptController::class, 'food'])->name('food');
    Route::get('/gaming', [AIPromptController::class, 'gaming'])->name('gaming');
    Route::get('/fashion', [AIPromptController::class, 'fashion'])->name('fashion');
    Route::get('/fitness', [AIPromptController::class, 'fitness'])->name('fitness');
    Route::get('/music', [AIPromptController::class, 'music'])->name('music');
    Route::get('/faceless-video', [AIPromptController::class, 'facelessVideo'])->name('faceless-video');
    Route::get('/news', [AIPromptController::class, 'news'])->name('news');
    Route::get('/documentary', [AIPromptController::class, 'documentary'])->name('documentary');
    Route::get('/fantasy', [AIPromptController::class, 'fantasy'])->name('fantasy');
    Route::get('/sci-fi', [AIPromptController::class, 'sciFi'])->name('sci-fi');
    Route::get('/horror', [AIPromptController::class, 'horror'])->name('horror');
    Route::get('/romance', [AIPromptController::class, 'romance'])->name('romance');
    Route::get('/kids-animation', [AIPromptController::class, 'kidsAnimation'])->name('kids-animation');
});

//Travel and Flight
Route::get('/travel-flight', [TravelFlightController::class,'index'])->name('travel-flight.show');
// View selected travel/flight service
Route::get('/travel-flight/{id}', [TravelFlightController::class,'show'])->name('travel-flight.details');
// Purchase / booking
Route::post('/travel-flight/purchase', [TravelFlightController::class,'purchase'])->name('travel-flight.purchase');


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


// Wallet
Route::get('/wallet', [WalletController::class,'index'])->name('wallet.show');
// Fund wallet
Route::get('/fund-wallet', [WalletController::class,'fundWallet'])->name('wallet.fund');
// Wallet transactions
Route::get('/transactions', [WalletController::class,'transactions'])->name('wallet.transactions');

});
