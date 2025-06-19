<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\JobController;

Route::view('/', 'home');
Route::view('/', 'contact');

Route::resource('jobs', JobController::class, []);