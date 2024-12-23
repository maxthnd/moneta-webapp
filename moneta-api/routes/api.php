<?php

use App\Http\Controllers\Plan;
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
