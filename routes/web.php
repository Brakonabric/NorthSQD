<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products',[ProductListController::class, 'showall']);
Route::get('/products/fill',[ProductListController::class, 'fill']);
Route::get('/products/{id}',[ProductListController::class, 'getProduct']);

Route::get('/users',[UserController::class, 'showall']);
Route::get('/users/remove',[UserController::class, 'remove']);
Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');

