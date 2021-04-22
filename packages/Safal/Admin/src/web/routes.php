<?php

use Illuminate\Support\Facades\Route;
use Safal\Admin\Http\Controllers\HomeController;

Route::get('/admin', [HomeController::class, 'index'])->name('admin.home');
