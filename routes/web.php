<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DesaController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware(['auth', 'role:super admin'])->prefix('admin')->as('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Desa
    Route::resource('desa', DesaController::class);
    Route::post('desa/fetch-kabupaten', [DesaController::class, 'fetchKabupaten'])->name('fetch-kabupaten');
    Route::post('desa/fetch-kecamatan', [DesaController::class, 'fetchKecamatan'])->name('fetch-kecamatan');

    // Message
    Route::resource('message', MessageController::class)->only(['index']);
});
