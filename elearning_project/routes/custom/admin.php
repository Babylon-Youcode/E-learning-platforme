<?php

Route::get('/dashboard', [App\Http\Controllers\AdminController::class,'getDashboard'])->name('admin-dashboard');

Route::get('/home', function(){return view('admin.home');})->name('admin.home');