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

// Route::get('/', function () {
//     return view('index', [
//         'name' => 'faraji',
//     ]);
// });


Route::resource('/', Landing::class)
    ->only(['index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// services
Route::resource('/service', ServiceController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth']);

// Applications
Route::resource('/application', ApplicationController::class)
    ->only(['index', 'create', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'isAdmin']);

//Therapist
Route::resource('/therapist', TherapistController::class)
    ->only(['store'])
    ->middleware(['auth']);

Route::any('/admin', function () {
    return view('admin.admin');
});

require __DIR__ . '/auth.php';
