<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AjaxContentController;
use App\Http\Livewire\ContactForm;
use App\Http\Controllers\PostController;

/**
 * Page routes
 */
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/company', [PageController::class, 'company'])->name('company');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/:id', [PageController::class, 'service_details'])->name('service_details');
Route::get('/work', [PostController::class, 'work_list'])->name('work_list');

Route::get('/work/{id}', [PostController::class, 'work_list'])->name('work_list');

Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

/**
 * API
 */
Route::get('/contact-form', [ContactForm::class, 'render'])->name('contact-form');
Route::get('/test', [PageController::class, 'test'])->name('test');

/**
 * AJAX routes
 */
Route::get('/ajax_callback_form', [AjaxContentController::class, 'ajax_callback_form'])->name('ajax_callback_form');
Route::get('/show_thanx', [AjaxContentController::class, 'show_thanx'])->name('show_thanx');

/**
 * Profile routes
 */
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
