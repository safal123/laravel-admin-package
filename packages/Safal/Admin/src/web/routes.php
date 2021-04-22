<?php

use Illuminate\Support\Facades\Route;
use Safal\Admin\Http\Controllers\AuthController;
use Safal\Admin\Http\Controllers\HomeController;

Route::get('/admin', [HomeController::class, 'index'])->name('admin.home');
Route::get('/admin/login', [AuthController::class, 'getLogin'])->name('admin.login');
// Route::get('/admin/register', [AuthController::class, 'getRegister'])->name('admin.register');
