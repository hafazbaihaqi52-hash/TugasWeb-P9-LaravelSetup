<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    $nama = 'Hafaz Baihaqi';
    $matakuliah = 'Pemrograman Web';
    $semester = 'Semester 3';

    return view('welcome', compact('nama', 'matakuliah', 'semester'));
});

Route::get('/about', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/hello/{nama}', function ($nama) {
    return "Halo, $nama! Selamat datang di Laravel.";
});