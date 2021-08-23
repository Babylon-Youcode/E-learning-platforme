<?php

Route::get('/dashboard', [App\Http\Controllers\Teacher\TeacherController::class,'getDashboard'])->name('teacher-dashboard');

Route::get('/', function(){return view('teacher.login');})->name('teacher-login');
// Route::get('/home', function(){return view('teacher.home');})->name('home');
Route::get('/home', [App\Http\Controllers\Teacher\TeacherController::class,'home'])->name('home');


Route::prefix('/course')->name('course.')->group(function () {
    Route::get('/', [App\Http\Controllers\Teacher\CourseController::class,'index'])->name('all');
    Route::get('/Add', [App\Http\Controllers\Teacher\CourseController::class,'create'])->name('create');
    Route::post('/Add', [App\Http\Controllers\Teacher\CourseController::class,'store'])->name('store');
    Route::get('/Delete/{course:id}', [App\Http\Controllers\Teacher\CourseController::class,'destroy'])->name('destroy');
    Route::get('/edit/{course:id}', [App\Http\Controllers\Teacher\CourseController::class,'edit'])->name('edit');
    Route::post('/edit/{course:id}', [App\Http\Controllers\Teacher\CourseController::class,'update'])->name('update');
    Route::get('/Show/{id}', [App\Http\Controllers\Teacher\CourseController::class,'show'])->name('show');
});