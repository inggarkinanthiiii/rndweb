<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\HomestayController;
use App\Http\Controllers\ContactController;

// HALAMAN WELCOME (akses ke '/')
Route::get('/', function () {
    return view('welcome'); // resources/views/welcome.blade.php
});

// HALAMAN HOME (landing page utama)
Route::get('/home', [PageController::class, 'index'])->name('home');

// HALAMAN PUBLIK LAINNYA
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/property', [PageController::class, 'property'])->name('property');
Route::get('/homestay', [PageController::class, 'homestay'])->name('homestay');

// HALAMAN CONTACT
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// HALAMAN ADMIN (CRUD)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('property', PropertyController::class);
    Route::resource('homestay', HomestayController::class);
});
