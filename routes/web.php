<?php

use App\Http\Controllers\InvationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/invation', [InvationController::class, 'index'])->name('invation');
