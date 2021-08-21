<?php

// Route::get('/dashboard', [App\Http\Controllers\UserController::class,'getDashboard'])->name('user-dashboard');

Route::get('/home', [App\Http\Controllers\User\UserController::class,'home'])->name('home');


Route::prefix('/course')->name('course.')->group(function () {
    Route::get('/', [App\Http\Controllers\User\UserController::class,'index'])->name('all');
    Route::get('/enrole/{id}', [App\Http\Controllers\User\UserController::class,'enrole'])->name('enrole');
});

Route::prefix('/enrolenments')->name('enrolenments.')->group(function () {
    Route::get('/', [App\Http\Controllers\User\UserController::class,'enrolenments'])->name('all');
    Route::get('/delete/{id}', [App\Http\Controllers\User\UserController::class,'destroy'])->name('delete');

});