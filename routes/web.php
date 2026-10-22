<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WSPController;

Route::get('/', [WSPController::class, 'beranda']);
Route::get('/profile', [WSPController::class, 'profilToko']);
Route::get('/katalog-produk', [WSPController::class, 'katalog']);
Route::get('/kontak', [WSPController::class, 'kontak']);