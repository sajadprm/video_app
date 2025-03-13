<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;


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
Route::get('/video/create',[VideoController::class,'create'])->name('video.create')->middleware('checkEmail');
Route::post('/video/store',[VideoController::class,'store'])->name('video.store');
Route::get('/video/{video}',[VideoController::class,'show'])->name('video.show');
Route::get('/video/{video}/edit',[VideoController::class,'edit'])->name('video.edit');
Route::post('/video/{video}',[VideoController::class,'update'])->name('video.update');
Route::get('/category/{category:slug}/videos',[\App\Http\Controllers\CategoryVideo::class,'index'])->name('category.videos.index');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('/email',function (){
    Mail::to('sajad.khosravi2013@gmail.com')->send( new \App\Mail\VerifyEmail(\App\Models\User::first()));
});
//   Route::get('/verify',function (Request $request){
//       if (! $request->hasValidSignature()) {
//           abort(401);
//       }
//   })->name('verify');
//Route::get('/generate',function (){
//    return URL::temporarySignedRoute(
//        'verify', now()->addSecond(20), ['user' => 1]
//    );
//});


Route::get('/jobs',function (){
    \App\Jobs\ProcessVideo::dispatch();
});

Route::get('/events',function (){
   $video=\App\Models\Video::first();
    \App\Events\VideoCreated::dispatch($video);
});
