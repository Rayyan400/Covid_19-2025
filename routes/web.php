<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/' , [FrontendController::class, 'home'])->name('home.page');
Route::get('/about' , [FrontendController::class, 'about'])->name('about.page');
