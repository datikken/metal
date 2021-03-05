<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/company', [PageController::class, 'company'])->name('company');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
