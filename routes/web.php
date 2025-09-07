<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/dashboard', function () {
    return view('dashboard.index'); // اسم ملف Blade بدون .blade.php
})->name('dashboard');
