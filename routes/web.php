<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AjaxContentController;
/**
 * Page routes
 */
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/company', [PageController::class, 'company'])->name('company');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

/**
 * AJAX routes
 */
Route::get('/ajax_callback_form', [AjaxContentController::class, 'ajax_callback_form'])->name('ajax_callback_form');


/**
 * Profile routes
 */
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
