<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class, 'index']);

Route::get('/clientes', [ClientController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
