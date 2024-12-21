<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [AuthController::class, 'login']);
Route::post('registrasi', [AuthController::class, 'registrasi']);

Route::middleware('auth:sanctum')->group(function () {

    Route::prefix('admin')->group(function () {
        
        Route::get('user/getAll', [UserController::class, 'getAll']);
        Route::get('user/getOne', [UserController::class, 'getOne']);
        Route::post('user/save', [UserController::class, 'save']);
        Route::post('user/delete', [UserController::class, 'delete']);

        Route::get('pekerja/getAll', [PekerjaController::class, 'getAll']);
        Route::get('pekerja/getOne', [PekerjaController::class, 'getOne']);
        Route::post('pekerja/save', [PekerjaController::class, 'save']);
        Route::post('pekerja/delete', [PekerjaController::class, 'delete']);

        Route::get('kategori/getAll', [KategoriController::class, 'getAll']);
        Route::get('kategori/getOne', [KategoriController::class, 'getOne']);
        Route::post('kategori/save', [KategoriController::class, 'save']);
        Route::post('kategori/delete', [KategoriController::class, 'delete']);

        Route::get('blog/getAll', [BlogController::class, 'getAll']);
        Route::get('blog/getOne', [BlogController::class, 'getOne']);
        Route::post('blog/save', [BlogController::class, 'save']);
        Route::post('blog/delete', [BlogController::class, 'delete']);

    });

});

