<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemanController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/teman',[TemanController::class,'index'])->name('listteman');