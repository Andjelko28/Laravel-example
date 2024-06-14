<?php


use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginUsercontroller;

use Illuminate\Support\Facades\Route;



Route::view('/', 'home');
Route::view('contact', 'contact');

// Group same routes
// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', ['index']);
//     Route::get('/jobs/create', ['create']);
//     Route::get('/jobs/{job}', ['show']);
//     Route::post('jobs', ['store']);
//     Route::get('/jobs/{job}/edit', ['edit']);
//     Route::patch('/jobs/{job}', ['update']);
//     Route::delete('/jobs/{job}', ['destroy']);
//});

Route::resource('jobs', JobController::class);


// Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [LoginUserController::class, 'create']);
Route::post('/login', [LoginUsercontroller::class, 'store']);
Route::post('/logout', [LoginUsercontroller::class, 'destroy']);
