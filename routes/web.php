<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\EventController;
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// --- Halaman Utama (Home) ---
Route::get('/', [HomeController::class, 'index'])->name('home');

// --- Rute Wajib  ---
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

// --- Rute Navigasi ---
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

Route::get('/checkout/{event}', [CheckoutController::class, 'create'])->name('checkout.create');
Route::post('/checkout/{event}', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/ticket', function () {
    return view('ticket');
});

// --- Rute Sisi Admin ---
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // 1. Rute Login bebas akses (TIDAK dijaga middleware)
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // 2. Mengamankan Route Administrasi di balik tembok (Middleware)
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('events', AdminEventController::class);

        Route::resource('categories', CategoryController::class);

        Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
        });
    });
