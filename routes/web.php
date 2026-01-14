<?php

use App\Http\Controllers\NavigateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigateController::class, 'index'])->name('home');
Route::get('/login', [NavigateController::class, 'login'])->name('login');
