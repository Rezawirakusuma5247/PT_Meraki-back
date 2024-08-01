<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CategoryController;

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/pelatihans', [PelatihanController::class, 'index'])->name('pelatihans.index');
Route::get('/pelatihans/create', [PelatihanController::class, 'create'])->name('pelatihans.create');
Route::post('/pelatihans', [PelatihanController::class, 'store'])->name('pelatihans.store');
Route::get('/pelatihans/{pelatihan}/edit', [PelatihanController::class, 'edit'])->name('pelatihans.edit');
Route::put('/pelatihans/{pelatihan}', [PelatihanController::class, 'update'])->name('pelatihans.update');
Route::delete('/pelatihans/{pelatihan}', [PelatihanController::class, 'destroy'])->name('pelatihans.destroy');

Route::get('/Admin-Dashboard', [ViewController::class, 'dashboard_admin'])->name('admin.dashboard');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
