<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// frontend start
Route::get('/' , [FrontendController::class, 'home'])->name('home.page');
Route::get('/about' , [FrontendController::class, 'about'])->name('about.page');

Route::get('/',function(){
    return view('Admin.index');
});
// Route::get('/',function(){
//     return view('Admin.home');
// });
