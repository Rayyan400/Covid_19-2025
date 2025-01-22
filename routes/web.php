<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
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
// Route::get('/patient' , [PatientController::class, 'index'])->name('patient.index');
// Route::get('/patient/create' , [PatientController::class, 'create'])->name('patient.create');
// Route::get('/patient/store' , [PatientController::class, 'store'])->name('patient.store');
// Route::get('/patient/{id}/edit' , [PatientController::class, 'edit'])->name('patient.edit ');
// Route::put('/patient/{id}/update' , [PatientController::class, 'update'])->name('update.edit ');
// Route::put('/patient/{id}/delete' , [PatientController::class, 'destroy'])->name('update.edit ');
// Route::put('/patient/{id}/show' , [PatientController::class, 'show'])->name('update.edit ');
Route::resource('/patients', PatientController::class);
