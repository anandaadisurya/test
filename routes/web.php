<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', function () {
    return 'Halo, Selamat Datang di Laravel!';
});
Route::get('/user/{name}', function ($name) {
    return 'Halo, ' . $name;
});
Route::get('/view-halo', function () {
    return view('halo');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/halo-controller', [App\Http\Controllers\HaloController::class, 'index']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);

Route::get('/', [HomeController::class, 'read'])->name('home');
Route::post('/store', [HomeController::class, 'store'])->name('store');
Route::get('/read', [HomeController::class, 'read'])->name('read');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [HomeController::class, 'destroy'])->name('destroy');