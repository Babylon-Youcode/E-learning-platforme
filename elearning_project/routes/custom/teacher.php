<?php

Route::get('/dashboard', [App\Http\Controllers\Teacher\TeacherController::class,'getDashboard'])->name('teacher-dashboard');

// Route::get('/', function(){return view('teacher.login');})->name('teacher,login');

Route::get('/home', [App\Http\Controllers\Teacher\TeacherController::class,'index'] )->name('teacher.home');


Route::get('/course', [App\Http\Controllers\Course\CourseController::class,'index'])->name('teacher-course');