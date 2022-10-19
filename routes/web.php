<?php

use App\Http\Controllers\Landing;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\TherapistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', Landing::class)
    ->only(['index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Dashboard
Route::view('/admin', 'admin.admin')
    ->middleware('auth', 'isAdmin')
    ->name('admin');

// services
Route::resource('/service', ServiceController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'isAdmin']);

// Applications
// client
Route::resource('/application', ApplicationController::class)
    ->only(['create', 'store'])
    ->middleware(['auth']);
// Admin 
Route::resource('/application', ApplicationController::class)
    ->only(['index', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'isAdmin']);

//Therapist
Route::resource('/therapist', TherapistController::class)
    ->only(['store'])
    ->middleware(['auth', 'isAdmin']);

require __DIR__ . '/auth.php';
