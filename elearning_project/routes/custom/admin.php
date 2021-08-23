<?php

Route::get('/home', [App\Http\Controllers\Admin\AdminController::class,'home'])->name('home');

// course
Route::prefix('/course')->name('course.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\CourseController::class,'index'])->name('all');
    Route::get('/Add', [App\Http\Controllers\Admin\CourseController::class,'create'])->name('create');
    Route::post('/Add', [App\Http\Controllers\Admin\CourseController::class,'store'])->name('store');
    Route::get('/Delete/{course:id}', [App\Http\Controllers\Admin\CourseController::class,'destroy'])->name('destroy');
    Route::get('/edit/{course:id}', [App\Http\Controllers\Admin\CourseController::class,'edit'])->name('edit');
    Route::post('/edit/{course:id}', [App\Http\Controllers\Admin\CourseController::class,'update'])->name('update');
    Route::get('/Show/{id}', [App\Http\Controllers\Admin\CourseController::class,'show'])->name('show');
});
//teacher
Route::prefix('/teacher')->name('teacher.')->group(function (){
    Route::get('/',[App\Http\Controllers\Admin\TeacherController::class,'index'])->name('all');
    Route::get('/Add',[App\Http\Controllers\Admin\TeacherController::class,'create'])->name('create');
    Route::post('/Add',[App\Http\Controllers\Admin\TeacherController::class,'store'])->name('store');
    Route::get('/delete/{id}', [App\Http\Controllers\Admin\TeacherController::class,'destroy'])->name('destroy');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\TeacherController::class,'edit'])->name('edit');
    Route::post('/edit/{id}', [App\Http\Controllers\Admin\TeacherController::class,'update'])->name('update');
    Route::get('/Show/{id}', [App\Http\Controllers\Admin\TeacherController::class,'show'])->name('show');

});
// user
Route::prefix('/user')->name('user.')->group(function (){
    Route::get('/',[App\Http\Controllers\Admin\UserController::class,'index'])->name('all');
    Route::get('/Add',[App\Http\Controllers\Admin\UserController::class,'create'])->name('create');
    Route::post('/Add',[App\Http\Controllers\Admin\UserController::class,'store'])->name('store');
    Route::get('/delete/{user:id}', [App\Http\Controllers\Admin\UserController::class,'destroy'])->name('destroy');
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class,'edit'])->name('edit');
    Route::post('/edit/{id}', [App\Http\Controllers\Admin\UserController::class,'update'])->name('update');
    Route::get('/Show/{id}', [App\Http\Controllers\Admin\UserController::class,'show'])->name('show');

});

