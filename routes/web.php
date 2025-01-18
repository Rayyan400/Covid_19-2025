<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// frontend Routes
Route::get('/', [UserController::class, 'signup'])->name('user.form')->middleware('check');
Route::post('/register' ,[UserController::class, 'register'])->name('user.store');
Route::get('/loginform',[UserController::class, 'loginform'])->name('user.login')->middleware('check');
Route::post('/login',[UserController::class, 'login'])->name('login');
Route::get('/website' , [UserController::class, 'website'])->name('website')->middleware(['role:admin,user','auth']);
Route::get('/logout' ,[UserController::class, 'logout'])->name('user.out');
Route::get('/about' , [UserController::class, 'about'])->name('about.page');

// Admin Routes
Route::get('/admin',[AdminController::class, 'admin'])->name('admin.page')->middleware(['role:admin','auth']);
// 
Route::resource('/product',ProductController::class);
