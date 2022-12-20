<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::get('/buat-akun', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('formregister');
Route::post('/simpan-akun', [App\Http\Controllers\Auth\RegisterController::class, 'simpan'])->name('buatakun');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('piala-dunia')->group(function () {
        Route::get('/', [App\Http\Controllers\PialaDunia::class, 'index'])->name('piala.dunia');
        Route::get('/tambah', [App\Http\Controllers\PialaDunia::class, 'tambah'])->name('piala.dunia.tambah');
        Route::post('/simpan', [App\Http\Controllers\PialaDunia::class, 'simpan'])->name('piala.dunia.simpan');
        Route::post('/update/{id}', [App\Http\Controllers\PialaDunia::class, 'update'])->name('piala.dunia.update');
        Route::get('/edit/{id}', [App\Http\Controllers\PialaDunia::class, 'edit'])->name('piala.dunia.edit');
        Route::post('/hapus/{id}', [App\Http\Controllers\PialaDunia::class, 'hapus'])->name('piala.dunia.hapus');
    });
});