<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


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

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'saveUser']);
Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'destroy'])->middleware('auth');


Route::get('/', function () {
    return inertia('Home');
})->name('home');
Route::get('about', [WebsiteController::class, 'about'])->name('web.about');
Route::middleware('auth')->group(function(){
    Route::get('webs', [WebsiteController::class, 'index'])->name('web.index');
    Route::get('web/create', [WebsiteController::class, 'create'])->name('web.create');
    Route::post('web/create', [WebsiteController::class, 'store'])->name('web.store');
    Route::delete('web/delete/{id}', [WebsiteController::class, 'destroy'])->name('web.destroy');
});

Route::get('/hash-password', function (Request $request) {
    $hashedPassword = Hash::make('test1234');

    return $hashedPassword;
});
