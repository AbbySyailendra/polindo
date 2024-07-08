<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaAjaxController;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\MidtransController;
use App\Http\Middleware\CheckMahasiswa;

Route::get('/midtrans', [MidtransController::class, 'index']);
Route::post('/midtrans/transaction', [MidtransController::class, 'createTransaction']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/login2', function () {
    return view('auth.login2');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/sukses', function () {
    return view('sukses');
});

Route::get('/updatedatamahasiswa', function () {
    // Konten halaman update data mahasiswa
})->middleware(CheckMahasiswa::class)->name('updatedatamahasiswa');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pilihanpaket', function () {
    return view('pilihanpaket');
})->middleware(['auth', 'verified'])->name('pilihanpaket');

Route::get('/updatedatamahasiswa', [MhsController::class, 'showForm'])
    ->middleware(CheckMahasiswa::class)
    ->name('updatedatamahasiswa');

Route::get('/updatepeserta/{id}', [MhsController::class, 'showDetail'])->middleware(['auth', 'verified'])->name('updatepeserta');
Route::get('/pembayaran/{id}', [MhsController::class, 'showDetailPembayaran'])->middleware(['auth', 'verified'])->name('pembayaran');

Route::post('/InsertFreeTest', [MhsController::class, 'InsertFreeTest']);
Route::post('/InsertPrem', [MhsController::class, 'InsertPremTest']);
Route::post('/UpdatePesertaControl', [MhsController::class, 'UpdateDataMhs']);
Route::post('/PembayaranMidtrans', [MidtransController::class, 'createTransaction']);

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->middleware(['auth', 'verified'])->name('pembayaran');

Route::resource('pesertaAjax', PesertaAjaxController::class);
//Route::get('/listinvoice', [InvoiceController::class, 'index'])->name('listinvoice')->middleware('role:admin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
