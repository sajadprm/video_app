<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[IndexController::class,'Index'])->name('index');
Route::get('/video/create',[VideoController::class,'create'])->name('video.create');
Route::post('/video/store',[VideoController::class,'store'])->name('video.store');
Route::get('/video/{video}',[VideoController::class,'show'])->name('video.show');
Route::get('/video/{video}/edit',[VideoController::class,'edit'])->name('video.edit');
Route::post('/video/{video}',[VideoController::class,'update'])->name('video.update');
Route::get('/category/{category:slug}/videos',[\App\Http\Controllers\CategoryVideo::class,'index'])->name('category.videos.index');
