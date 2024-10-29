<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SwordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/swords', [SwordController::class, 'index'])->name('swords.index');

