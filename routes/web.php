<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentResultController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TherapistController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Testimonial;

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

/**
 * Root route
 * 
 * return index view with relevant data
 */
Route::get('/', function () {
    return view('index', [
        'services' => Service::all(),
        'testimonials' => Testimonial::orderBY('created_at')->take(3)->get(),
    ]);
})->name('index');


Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

/**
 * Admin Dashboard
 */
Route::view('/admin', 'admin.admin')
    ->middleware('auth', 'isAdmin')
    ->name('admin');

// services
Route::resource('/service', ServiceController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'isAdmin']);

/**
 * Applications
 */
// client routes
Route::resource('/application', ApplicationController::class)
    ->only(['create', 'store'])
    ->middleware(['auth']);
// Admin routes
Route::resource('/application', ApplicationController::class)
    ->only(['index', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'isAdmin']);

/**
 * Therapist
 */
// client routes
Route::resource('/therapist', TherapistController::class)
    ->only(['index'])
    ->middleware(['auth']);
// Admin routes
Route::resource('/therapist', TherapistController::class)
    ->only(['store'])
    ->middleware(['auth', 'isAdmin']);

/**
 *  Appointment
 */
Route::resource('/appointment', AppointmentController::class)
    ->only(['index', 'create', 'store'])
    ->middleware(['auth']);

/**
 * Payment
 */
Route::resource('/payment', PaymentController::class)
    ->only(['store'])
    ->middleware(['auth']);

/**
 * Payment Result
 * 
 * Call back route for daraja mpesa express api
 */
Route::resource('/result', PaymentResultController::class)
    ->only(['index', 'store']);

/**
 * Testimonial
 */
Route::resource('/testimonial', TestimonialController::class)
    ->only(['create', 'store'])
    ->middleware(['auth']);

/**
 * client profile
 */
Route::view('/profile', 'client.show')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
