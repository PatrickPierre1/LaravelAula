<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class, 'index']);

Route::get('/produto', [SiteController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
