<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudPractice1Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [CrudPractice1Controller::class, 'index'])->name('home');
Route::get('/product-category', [CrudPractice1Controller::class, 'category'])->name('product.category');
Route::get('/product-detail', [CrudPractice1Controller::class, 'detail'])->name('product.detail');


Route::get('/show-cart', [CartController::class, 'index'])->name('show.cart');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');






Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');

    Route::post('/category/new', [CategoryController::class, 'create'])->name('category.new');
    Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


});
