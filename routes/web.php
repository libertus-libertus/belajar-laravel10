<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// routeLandingPage
Route::get('/', [HomeController::class, 'index']);
Route::get('/pricing', [HomeController::class, 'pricing']);
Route::get('/contact', [HomeController::class, 'contact']);

// routeAuthenticate
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
