<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\investmentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Middleware\Blocked;
use Illuminate\Support\Facades\Route;

Route::get('/', PageController::class)->name('home');
Route::get('/page/{page}', PageController::class)->name('page');

Route::middleware(['auth', 'verified',  Blocked::class])->group(function () {
    Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/settings', [ProfileController::class, 'edit'])->name('profile.settings');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('deposit', [DepositController::class, 'create'])->name('deposit.create');
    Route::post('deposit', [DepositController::class, 'store'])->name('deposit.store');
    Route::get('withdraw', [WithdrawalController::class, 'create'])->name('withdraw.create');
    Route::post('withdraw', [WithdrawalController::class, 'store'])->name('withdraw.store');
    Route::post('transfer', TransferController::class)->name('transfer');

    Route::get('transactions/{transaction}', [TransactionController::class, 'show'])->name('transactions.show');
    Route::get('transactions/', [TransactionController::class, 'index'])->name('transactions.index');

    Route::get('plans', [PlanController::class, 'index'])->name('plans.index');

    Route::get('invest', [investmentController::class, 'index'])->name('invest.index');
    Route::get('invest/create', [investmentController::class, 'create'])->name('invest.create');
    Route::post('invest', [investmentController::class, 'store'])->name('invest.store');
    Route::get('invest/{investment}', [investmentController::class, 'show'])->name('invest.show');
    Route::post('invest/{investment}', [investmentController::class, 'destroy'])->name('invest.destroy');
    Route::post('invest/{investment}/withdraw', [investmentController::class, 'withdraw'])->name('invest.withdraw');
});

require __DIR__.'/auth.php';
