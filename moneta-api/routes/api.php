<?php

use App\Http\Controllers\Plan;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/create-plan', [Plan::class, 'store'])
    ->middleware('guest')
    ->name('plan.store');

Route::get('/update-plan', [Plan::class, 'update'])
    ->middleware('guest')
    ->name('plan.update');

Route::get('/delete-plan', [Plan::class, 'delete'])
    ->middleware('guest')
    ->name('plan.delete');

Route::get('/create-transaction', [TransactionController::class, 'store'])
    ->middleware('guest')
    ->name('transaction.store');

Route::get('/update-transaction', [TransactionController::class, 'update'])
    ->middleware('guest')
    ->name('transaction.update');

Route::get('/delete-transaction', [TransactionController::class, 'delete'])
    ->middleware('guest')
    ->name('transaction.delete');
