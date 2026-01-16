<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);

Route::get('/download', [PageController::class, 'download']);

Route::get('/ranking', [PageController::class, 'ranking']);