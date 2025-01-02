<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = config('projects');

    return view('welcome', compact('projects'));
});
