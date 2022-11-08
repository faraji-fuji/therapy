<?php

use App\Http\Controllers\Landing;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentResultController;
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
// client
Route::resource('/therapist', TherapistController::class)
    ->only(['index'])
    ->middleware(['auth']);
// Admin
Route::resource('/therapist', TherapistController::class)
    ->only(['store'])
    ->middleware(['auth', 'isAdmin']);

// Appointment
Route::resource('/appointment', AppointmentController::class)
    ->only(['index', 'create', 'store'])
    ->middleware(['auth']);

// Payment
Route::resource('/payment', PaymentController::class)
    ->only(['store'])
    ->middleware(['auth']);

// Payment Result
Route::resource('/result', PaymentResultController::class)
    ->only(['index', 'store']);

// redirect
// Route::post('/appoint', function () {
//     return redirect('/appointment@store');
// })->name("appoint");

require __DIR__ . '/auth.php';
