<?php

use App\Http\Web\Auth\Controllers\LoginController;
use App\Http\Web\Auth\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

Route::post('login', LoginController::class)->name('web.login');
Route::post('logout', LogoutController::class)->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('web.home');
});
