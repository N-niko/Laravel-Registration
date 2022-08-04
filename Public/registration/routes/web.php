<?php

use App\Http\Controllers\main;
use Illuminate\Support\Facades\Route;

Route::get('/', [main::class, 'home']);

Route::get('/login', [main::class, 'login']);

Route::get('/signup', [main::class, 'signup']);

Route::post('/register', [main::class, 'register']);

Route::get('/logout', [main::class, 'logout']);

Route::post('/loginuser', [main::class, 'loginuser']);
