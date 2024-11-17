<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/show-login', [HomeController::class,'loginShow'])->name('login.show');
Route::post('/user-login', [HomeController::class,'login'])->name('login.user');
Route::get('/user-dashboard', [HomeController::class,'userDashboard'])->name('dashboard.user');
Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('/submit', [HomeController::class,'submitForm'])->name('submit');
Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/dashboard-edit/{id}', [DashboardController::class,'edit'])->name('dashboard.edit');
Route::post('/dashboard-approve/{id}', [DashboardController::class,'memberApproved'])->name('member.approved');
