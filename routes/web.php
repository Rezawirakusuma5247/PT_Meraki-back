<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubcriptionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\CheckAuth;


Route::get('/home', [ViewController::class, 'index'])->name('welcome');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login-proses', [LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');




Route::middleware(CheckAuth::class)->group(function () {
    Route::get('/Admin-Dashboard', [ViewController::class, 'dashboard_admin'])->name('admin.dashboard');

    Route::get('/pelatihans', [PelatihanController::class, 'index'])->name('pelatihans.index');
    Route::get('/pelatihans/create', [PelatihanController::class, 'create'])->name('pelatihans.create');
    Route::post('/pelatihans', [PelatihanController::class, 'store'])->name('pelatihans.store');
    Route::get('/pelatihans/{pelatihan}/edit', [PelatihanController::class, 'edit'])->name('pelatihans.edit');
    Route::put('/pelatihans/{pelatihan}', [PelatihanController::class, 'update'])->name('pelatihans.update');
    Route::delete('/pelatihans/{pelatihan}', [PelatihanController::class, 'destroy'])->name('pelatihans.destroy');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    Route::get('slides', [SlideController::class, 'index'])->name('slides.index');
    Route::get('slides/create', [SlideController::class, 'create'])->name('slides.create');
    Route::post('slides', [SlideController::class, 'store'])->name('slides.store');
    Route::get('slides/{slide}/edit', [SlideController::class, 'edit'])->name('slides.edit');
    Route::put('slides/{slide}', [SlideController::class, 'update'])->name('slides.update');
    Route::delete('slides/{slide}', [SlideController::class, 'destroy'])->name('slides.destroy');

    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

    Route::get('/subcriptions/export', [SubcriptionController::class, 'export'])->name('subcriptions.export');
    Route::post('/subcriptions/import', [SubcriptionController::class, 'import'])->name('subcriptions.import');
    Route::get('/admin/subcriptions', [SubcriptionController::class, 'index'])->name('subcription.index');
    Route::get('/admin/registration', [RegistrationController::class, 'index'])->name('registration.index');
});


Route::get('pelatihan', [ViewController::class, 'view_pelatihan'])->name('pelatihan');
Route::get('certificate', [ViewController::class, 'view_certificate'])->name('certificate');
Route::get('informasi', [ViewController::class, 'view_informasi'])->name('informasi');
Route::get('contact', [ViewController::class, 'view_contact'])->name('contact');
Route::get('thanks', [ViewController::class, 'view_thanks'])->name('thanks');
Route::post('/subcription', [SubcriptionController::class, 'store'])->name('subcription.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/pelatihan/{category}', [PelatihanController::class, 'showByCategory'])->name('pelatihan.category');
Route::get('/pelatihan/detail/{id}', [PelatihanController::class, 'show'])->name('pelatihan.show');
Route::get('/pelatihans/jadwal/{category}', [PelatihanController::class, 'showJadwalByCategory'])->name('pelatihans.jadwal.category');
Route::get('/pelatihan/{id}/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('pelatihan/{id}/registration', [RegistrationController::class, 'store'])->name('registration.store');




use App\Http\Controllers\NavbarController;

Route::get('/layout', [NavbarController::class, 'main'])->name('main');





