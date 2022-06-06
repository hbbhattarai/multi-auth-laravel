<?php

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

Route::get('/', function () {
    return view('home');
});


Auth::routes();

Route::middleware('staff')->group(function () {
    Route::get('/staff/home', [App\Http\Controllers\HomeController::class, 'staffIndex'])->name('staff.home');

});

Route::middleware('owner')->group(function () {
    Route::get('/owner/home', [App\Http\Controllers\HomeController::class, 'ownerIndex'])->name('owner.home');

});

Route::middleware('tenant')->group(function () {
    Route::get('/tenant/home', [App\Http\Controllers\HomeController::class, 'tenantIndex'])->name('tenant.home');

});