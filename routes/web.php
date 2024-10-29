<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SwordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/swords', [SwordController::class, 'index'])->name('swords.index');
Route::get('/swords/create', [SwordController::class, 'create'])->name('swords.create');
Route::get('/swords/{id}', [SwordController::class, 'show'])->name('swords.show');
Route::post('/swords', [SwordController::class, 'store'])->name('swords.store');

