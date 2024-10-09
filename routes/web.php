<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', \App\Http\Controllers\WelcomeController::class);

Route::get('/outra',  fn() => 'oi meu!');
