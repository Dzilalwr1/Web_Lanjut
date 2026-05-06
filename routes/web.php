<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use League\Uri\Http;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController as UserHomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');
    Route::resource('users', UserController::class)->except('show')->names('admin.users');
    Route::resource('customers', \App\Http\Controllers\Admin\CustomerController::class)->except('show')->names('admin.customers');
});
Auth::routes();


Route::get('/home', [UserHomeController::class, 'index'])->name('home')->middleware(['auth','user']);
