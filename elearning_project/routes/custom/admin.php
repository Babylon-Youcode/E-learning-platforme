<?php

Route::get('/home', function(){return view('admin.home');})->name('home');


Route::prefix('/course')->name('course.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\CourseController::class,'index'])->name('all');
    Route::get('/Add', [App\Http\Controllers\Admin\CourseController::class,'create'])->name('create');
    Route::post('/Add', [App\Http\Controllers\Admin\CourseController::class,'store'])->name('store');
    Route::post('/Delete', [App\Http\Controllers\Admin\CourseController::class,'destroy'])->name('destroy');
    Route::get('/Edit', [App\Http\Controllers\Admin\CourseController::class,'edit'])->name('edit');
    Route::post('/Edit', [App\Http\Controllers\Admin\CourseController::class,'update'])->name('update');
    Route::get('/Show', [App\Http\Controllers\Admin\CourseController::class,'show'])->name('show');
});
