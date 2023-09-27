<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HasilTesController;
use App\Http\Controllers\PernyataanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Pengunjung tanpa login
Route::get('/', [HomeController::class, 'index']);
Route::get('/tes', [TestController::class, 'index']);
Route::post('/hasiltes', [HasilTesController::class, 'store']);

// User Regis
Route::post('/regis', [RegisterController::class, 'store']);

// Pengunjung Login-Logout
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
// Google Login
Route::get('/auth/redirect', [GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/callback', [GoogleController::class, 'handleGoogleCallback']);

// Middleware cek role
Route::group(['middleware' => 'auth'], function() {

    // Halaman yang bisa diakses oleh Admin
    Route::group(['middleware' => 'cekrole:admin'], function() {
        Route::get('/admin', [AdminController::class, 'index']);
        Route::get('/pernyataan', [AdminController::class, 'pernyataan']);
    });

    // Halaman yang bisa diakses oleh Pengunjung
    Route::group(['middleware' => 'cekrole:pengunjung'], function() {
        Route::get('/profile', [UserController::class, 'profile']);
        Route::get('/ubahpwd', [UserController::class, 'ubahpw']);
    });
});

// Update User
Route::put('/profil/{id}', [UserController::class, 'update']);

// Update Password User
Route::put('/ubahpw', [UserController::class, 'updatepw']);

// Create, Update, Delete pernyataan
Route::post('/tambahpernyataan', [PernyataanController::class, 'store']);
Route::put('/pernyataan/{id}', [PernyataanController::class, 'update']);
Route::delete('/pernyataan/{id}', [PernyataanController::class, 'destroy']);
