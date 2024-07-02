<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaAjaxController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/login2', function () {
    return view('auth.login2');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pilihanpaket', function () {
    return view('pilihanpaket');
})->middleware(['auth', 'verified'])->name('pilihanpaket');

Route::get('/updatepeserta', function () {
    return view('updatepeserta');
})->middleware(['auth', 'verified'])->name('updatepeserta');

Route::get('/datapeserta', function () {
    return view('datapeserta');
})->middleware(['auth', 'verified'])->name('datapeserta');

Route::get('/tagihan', function () {
    return view('tagihan');
})->middleware(['auth', 'verified'])->name('tagihan');

Route::resource('pesertaAjax', PesertaAjaxController::class);
//Route::get('/listinvoice', [InvoiceController::class, 'index'])->name('listinvoice')->middleware('role:admin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
