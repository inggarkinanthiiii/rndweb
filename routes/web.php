<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\HomestayController;

// HALAMAN WELCOME (tampil saat akses /)
Route::get('/', function () {
    return view('welcome'); // => resources/views/welcome.blade.php
});

// HALAMAN HOME (landing page utama)
Route::get('/home', [PageController::class, 'index']); // => resources/views/home.blade.php

// HALAMAN PUBLIK LAINNYA
Route::get('/portfolio', [PageController::class, 'portfolio']);
Route::get('/property', [PageController::class, 'property']);
Route::get('/homestay', [PageController::class, 'homestay']);

// HALAMAN ADMIN (CRUD)
Route::resource('/admin/portfolio', PortfolioController::class);
Route::resource('/admin/property', PropertyController::class);
Route::resource('/admin/homestay', HomestayController::class);
