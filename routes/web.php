<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');
Route::get('/data-umat', function () {
    return view('pages.data-umat');
})->name('data-umat');
Route::get('/zonasi-wilayah', function () {
    return view('pages.zonasi-wilayah');
})->name('zonasi-wilayah');
Route::get('/statistik-bulanan', function () {
    return view('pages.statistik-bulanan');
})->name('statistik-bulanan');
Route::get('/arsip-data', function () {
    return view('pages.arsip-data');
})->name('arsip-data');
