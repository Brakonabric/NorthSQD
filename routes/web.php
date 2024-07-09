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
    return view('welcome');
});

Route::get('/products',[ProductListController::class, 'showall']);
Route::get('/products/fill',[ProductListController::class, 'fill'])->middleware('auth');
Route::post('/products/addProduct',[ProductListController::class, 'addProduct'])->name('addProduct');
Route::get('/products/addProduct',[ProductListController::class, 'showAddProductForm']);
Route::get('/products/{id}',[ProductListController::class, 'getProduct']);

Route::get('/users',[UserController::class, 'showall'])->middleware('auth');
Route::get('/users/remove',[UserController::class, 'remove'])->middleware('auth');
Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout']);

