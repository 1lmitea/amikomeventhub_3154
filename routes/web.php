<?php

use Illuminate\Support\Facades\Route;

// --- Halaman Utama (Home) ---
Route::get('/', function () {
    return view('welcome');
});

// --- Rute Wajib (Sesuai Modul) ---
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

// --- Rute Tambahan (Navigasi) ---
Route::get('/kontak', function () {
    return view('kontak');
});