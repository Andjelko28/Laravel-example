<?php


use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginUserController;

use Illuminate\Support\Facades\Route;



Route::view('/', 'home');
Route::view('contact', 'contact');

// Group same routes
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', ['index']);
    Route::get('/jobs/create', ['create']);
    Route::get('/jobs/{job}', ['show']);
    Route::post('jobs', ['store'])->middleware('auth');
    Route::get('/jobs/{job}/edit', ['edit'])->middleware(['auth', 'can:edit-job,job']);
    Route::patch('/jobs/{job}', ['update']);
    Route::delete('/jobs/{job}', ['destroy']);
});


// Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [LoginUserController::class, 'create'])->name('login');
Route::post('/login', [LoginUserController::class, 'store']);
Route::post('/logout', [LoginUserController::class, 'destroy']);
