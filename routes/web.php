<?php

use App\Http\Controllers\Admin\ManagementBarangController;
use App\Http\Controllers\Customer\BarangController;
use App\Http\Controllers\Customer\HistoryController;
use App\Http\Controllers\Customer\KeranjangController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');                                                                                                                                                                                                                                                                                                         
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/management-barang', [ManagementBarangController::class, 'index'])->name('management-barang.index');
    Route::get('/management-barang/create', [ManagementBarangController::class, 'create'])->name('management-barang.create');
    Route::post('/management-barang/store', [ManagementBarangController::class, 'store'])->name('management-barang.store');
    Route::get('/management-barang/{id}/edit', [ManagementBarangController::class, 'edit'])->name('management-barang.edit');
    Route::put('/management-barang/{id}/update', [ManagementBarangController::class, 'update'])->name('management-barang.update');
    Route::delete('/management-barang/{id}/delete', [ManagementBarangController::class, 'delete'])->name('management-barang.delete');



    Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


