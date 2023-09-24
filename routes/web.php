<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SneakerController;
use App\Http\Controllers\DarkModeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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
    return redirect()->route('sneakers');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/sneakers/create', [SneakerController::class, 'create'])->name('sneakers.create');
    Route::post('/sneakers', [SneakerController::class, 'store'])->name('sneakers.store');
    Route::delete('/sneakers/{sneaker}', [SneakerController::class, 'destroy'])->name('sneakers.destroy');
    Route::get('/sneakers/{sneaker}/edit', [SneakerController::class, 'edit'])->name('sneakers.edit');
    Route::put('/sneakers/{sneaker}', [SneakerController::class, 'update'])->name('sneakers.update');
    Route::post('/sneakers/{sneaker}/like', [SneakerController::class, 'like'])->name('sneakers.like');
    Route::post('/sneakers/{sneaker}/dislike', [SneakerController::class, 'dislike'])->name('sneakers.dislike');
});

Route::get('/sneakers', [SneakerController::class, 'all'])->name('sneakers');
Route::get('/sneakers/{sneaker}', [SneakerController::class, 'show'])->name('sneakers.show');
Route::post('/toggle-dark-mode', [DarkModeController::class, 'toggleDarkMode'])->name('toggle-dark-mode');

require __DIR__.'/auth.php';
