<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Laravel\Cashier\Http\Controllers\WebhookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('stripe/webhook', [WebhookController::class, 'handleWebhook']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'saveUser']);
Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth');

Route::get('/', function () {
    return inertia('Home');
})->name('home');
Route::get('about', [WebsiteController::class, 'about'])->name('web.about');
Route::middleware('auth')->group(function () {
    Route::get('webs', [WebsiteController::class, 'index'])->name('web.index');
    Route::get('web/create', [WebsiteController::class, 'create'])->name('web.create')->middleware('subscribed');
    Route::post('web/create', [WebsiteController::class, 'store'])->name('web.store')->middleware('subscribed');
    Route::delete('web/delete/{id}', [WebsiteController::class, 'destroy'])->name('web.destroy');

    Route::get('/pricing', [PricingController::class, 'pricing'])->name('billing.plan');
    Route::get('/checkout/{name}', [PricingController::class, 'checkout'])->name('billing.checkout');
    Route::get('/checkout-success', [PricingController::class, 'success'])->name('checkout.success');
    Route::get('/checkout-cancel', [PricingController::class, 'cancel'])->name('checkout.cancel');
});

Route::get('/hash-password', function (Request $request) {
    $hashedPassword = Hash::make('test1234');

    return $hashedPassword;
});
