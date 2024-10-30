<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SwordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::prefix('swords')->name('sword.')->group(function(){
Route::get('/', [SwordController::class, 'index'])->name('index');
Route::get('/create', [SwordController::class, 'create'])->name('create');
Route::get('/{id}', [SwordController::class, 'show'])->name('show');
Route::post('/', [SwordController::class, 'store'])->name('store');
Route::get('/{id}/edit',[SwordController::class, 'edit'])->name('edit');
Route::put('/{id}',[SwordController::class, 'update'])->name('update');
Route::delete('/{id}',[SwordController::class, 'destroy'])->name('delete');
});

