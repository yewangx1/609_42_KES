<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', [ 'group' => '60942KES']);
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/card/{id}', [CardController::class, 'show']);

Route::get('/accounts', [AccountController::class, 'index']);
Route::get('/account/create', [AccountController::class, 'create']);
Route::post('/account', [AccountController::class, 'store']);
Route::get('/account/edit/{id}', [AccountController::class, 'edit']);
Route::post('/account/update/{id}', [AccountController::class, 'update']);
Route::get('/account/destroy/{id}', [AccountController::class, 'destroy']);

Route::get('/account/{id}', [AccountController::class, 'show']);