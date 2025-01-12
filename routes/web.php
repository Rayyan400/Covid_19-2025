<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// frontend Routes
Route::get('/' , [FrontendController::class, 'home'])->name('home.page');
Route::get('/about' , [FrontendController::class, 'about'])->name('about.page');
Route::get('/signupform',[FrontendController::class, 'signup'])->name('signup.page');
Route::get('/loginform',[FrontendController::class, 'login'])->name('login.page');

// Admin Routes
Route::get('/admin',[AdminController::class, 'admin'])->name('admin.page');
