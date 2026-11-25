<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/services', 'services')->name('services');
Route::view('/a-propos', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/cgu', 'cgu')->name('cgu');
