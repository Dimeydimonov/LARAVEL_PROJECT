<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\IndexController;

Route::get('/page', [IndexController::class,'index']);
