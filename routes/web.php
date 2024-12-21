<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\MajikanController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\ProsedurController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login-post', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/registerasi', [AuthController::class, 'registerPage'])->name('registerasi');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::prefix('pekerja')->group(function () {
    Route::get('dashboard', [PekerjaController::class, 'dashboard'])->name('pekerja.dashboard');
    Route::get('data-diri', [PekerjaController::class, 'dataDiri'])->name('pekerja.data_diri');
});

Route::get('lowongan', [LowonganController::class, 'index'])->name('lowongan');
Route::post('lowongan/save', [LowonganController::class, 'save'])->name('lowongan.save');

Route::prefix('majikan')->group(function () {
    Route::get('dashboard', [MajikanController::class, 'index'])->name('majikan.dashboard');
    Route::get('data-pekerja', [MajikanController::class, 'dataPekerja'])->name('majikan.data_pekerja');
    Route::get('data-diri', [MajikanController::class, 'dataDiri'])->name('majikan.data_diri');
    Route::get('data-order', [MajikanController::class, 'dataOrder'])->name('majikan.order');
});

Route::get('/pekerja', [PekerjaController::class, 'index'])->name('pekerja');
Route::get('/pekerja/detail/{id}', [PekerjaController::class, 'detailPekerja'])->name('pekerja.detail');

Route::get('/prosedur', [ProsedurController::class, 'index'])->name('prosedur');
Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');