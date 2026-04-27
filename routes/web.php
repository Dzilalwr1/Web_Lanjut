<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use League\Uri\Http;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');
    Route::resource('users', UserController::class)->except('show')->names('admin.users');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('home')->middleware(['auth','user']);