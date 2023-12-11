<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'loginStore'])->name('loginPost');

Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfilController::class, 'profil'])->name('viewProfil');
    Route::get('/edit',[ProfilController::class, 'edit'])->name('edit');
    Route::put('/edit',[ProfilController::class, 'update'])->name('update');
    Route::delete('/edit',[ProfilController::class, 'deleteImage'])->name('deleteImage');
    Route::get('/password', [AuthController::class, 'updatePass'])->name('pass');
    Route::put('/ubahPassword', [AuthController::class, 'ubahPassword'])->name('password');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
