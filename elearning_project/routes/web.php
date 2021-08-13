<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// public routes
Route::get('/', function () {
    return view('index');
});
Route::get('/teacher/register', function(){return view('teacher.register');})->name('teacher.register');

// protected routes

    // ** auth
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

    // ** auth + admin
    Route::middleware(['auth', 'admin'])->prefix('/admin')->group(function () {require_once __DIR__.'/custom/admin.php';});

    // ** auth + User
    Route::middleware(['auth', 'user'])->prefix('/user')->group(function () {require_once __DIR__.'/custom/user.php';});

    // ** auth + Teacher
    Route::middleware(['auth', 'teacher'])->prefix('/teacher')->group(function () {require_once __DIR__.'/custom/teacher.php';});