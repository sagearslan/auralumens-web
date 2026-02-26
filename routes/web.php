<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/privacy', [WebController::class, 'privacy'])->name('privacy');
Route::get('/terms', [WebController::class, 'terms'])->name('terms');
