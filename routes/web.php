<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\frontend\HomeController;
Use App\Http\Controllers\frontend\TvController;
Use App\Http\Controllers\frontend\MovieController;
Use App\Http\Controllers\frontend\CelebsController;
Use App\Http\Controllers\frontend\SoonController;
Use App\Http\Controllers\frontend\MovieDetailController;
Use App\Http\Controllers\backend\BDashboardController;
Use App\Http\Controllers\backend\BMovieController;
Use App\Http\Controllers\backend\BCelebController;
Use App\Http\Controllers\backend\BSoonController;
Use App\Http\Controllers\backend\UserController;
Use App\Http\Controllers\backend\auth\AuthController;

/*  
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
Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index');
});
Route::controller(TvController::class)->group(function(){
    Route::get('/tv', 'index');
});
Route::controller(MovieController::class)->group(function(){
    Route::get('/fmovie', 'index');
});
Route::controller(CelebsController::class)->group(function(){
    Route::get('/celeb', 'index');
});
Route::controller(SoonController::class)->group(function(){
    Route::get('/soon', 'index');
});
Route::controller(MovieDetailController::class)->group(function(){
    Route::get('/moviedetail', 'index');
});
Route::get('/moviedetail/{id}', [MovieDetailController::class, 'index']);


Route::resource('/moviedetail', MovieDetailController::class);

    


/*backend block*/
Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'index')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::post('/register.save', 'saveRegister')->name('register.save');
    Route::post('/login', 'loginAction')->name('login.action');
    
});

// Login route
Route::get('/login', [AuthController::class, 'index'])->name('login');

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Add this to your routes/web.php
Route::post('/clear-login-alert', [AuthController::class, 'clearLoginAlert'])
    ->name('clear.login.alert');

        
Route::get('/auth', [\App\Http\Controllers\backend\auth\AuthController::class, 'index']);


Route::controller(BDashboardController::class)->group(function(){
    Route::get('/dashboard', 'index');
});

Route::resource('/movie', BMovieController::class);

Route::resource('/bceleb', BCelebController::class);

Route::resource('/bsoon', BSoonController::class);

Route::resource('/user', UserController::class);
