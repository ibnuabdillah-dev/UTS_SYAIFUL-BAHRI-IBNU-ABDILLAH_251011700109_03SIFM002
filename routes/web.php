<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SnackController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/produk', [SnackController::class, 'index'])->name('produk.index');
Route::get('/produk/{snack}', [SnackController::class, 'show'])->name('produk.show');
