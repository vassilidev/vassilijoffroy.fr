<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
Route::view('cgu', 'cgu')->name('cgu');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
