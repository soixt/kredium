<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CashLoanProductController;
use App\Http\Controllers\HomeLoanProductController;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    
    Route::resource('clients', ClientController::class)->except('show');
    Route::put('/clients/{client}/cash-load/update', CashLoanProductController::class)->name('cash.loan.update');
    Route::put('/clients/{client}/home-load/update', HomeLoanProductController::class)->name('home.loan.update');

    Route::get('/reports', [ReportsController::class, 'index'])->name('reports.index');
    Route::get('/products/export', [ReportsController::class, 'export'])->name('products.export');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
