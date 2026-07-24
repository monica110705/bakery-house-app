<?php

use Illuminate\Support\Facades\Route;

// Mengalihkan halaman utama (/) langsung ke halaman login Filament
Route::get('/', function () {
    return redirect('/admin/login');
});