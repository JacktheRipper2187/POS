<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/category/{slug}', [PageController::class, 'products'])->name('products');
Route::get('/user/{id}/name/{name}', [PageController::class, 'user'])->name('user');
Route::get('/sales', [PageController::class, 'sales'])->name('sales');
