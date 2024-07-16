<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
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

//Route::get('/', function () {
//    return view('home');
//})->name('home');

Route::get('/products',[ProductListController::class, 'showall'])->name('products');
Route::get('/products/fill',[ProductListController::class, 'fill'])->middleware('auth');
Route::post('/products/add-product',[ProductListController::class, 'addProduct'])->name('addProduct');
Route::get('/products/add-product',[ProductListController::class, 'showAddProductForm']);
Route::get('/products/{id}',[ProductListController::class, 'getProduct']);

Route::get('/',[ProductListController::class, 'homeSlider'])->name('home');;
Route::get('/search',[ProductListController::class, 'search'])->name('search');
Route::get('/collection',[ProductListController::class, 'collection'])->name('collection');
Route::get('/category',[ProductListController::class, 'category'])->name('category');
Route::get('/sales',[ProductListController::class, 'sales'])->name('sales');


Route::get('/sign-up', [UserController::class, 'showRegistrationForm']);
Route::post('/sign-up', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/addToCart/{id}/', [CartItemController::class, 'addToCart'])->name('addToCart');
Route::get('/removeFromCart/{id}', [CartItemController::class, 'removeFromCart'])->name('removeFromCart');

Route::get('/saveCart', [CartController::class, 'saveCart'])->name('saveCart');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');

Route::get('/error', function () {
    return view('error');
});

Route::get('/profile',[UserController::class, 'profile'])->middleware('auth')->name('profile');



