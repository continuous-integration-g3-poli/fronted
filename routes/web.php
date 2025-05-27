<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'indexLogin'])->name('login');
Route::get('login', [UserController::class, 'indexLogin'])->name('login');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::post('user/logout', [UserController::class, 'logout']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('dashboard',  [HomeController::class, 'index'])->name('home');
});
