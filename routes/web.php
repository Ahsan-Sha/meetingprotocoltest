<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/',[\App\Http\Controllers\BicycleController::class, 'index']);
Route::get('bicycles',[\App\Http\Controllers\BicycleController::class, 'index'])->name('bicycles.index');
Route::get('bicycles/create',[\App\Http\Controllers\BicycleController::class, 'create'])->name('bicycles.create');
Route::post('bicycles/store',[\App\Http\Controllers\BicycleController::class, 'store'])->name('bicycles.store');
