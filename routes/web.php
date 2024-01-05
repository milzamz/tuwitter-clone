<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\TuwitController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::post('/tuwit', [TuwitController::class,'store'])->name('tuwit.create');
Route::get('/tuwit/{id}', [TuwitController::class,'show'])->name('tuwit.show');
Route::get('/tuwit/{id}/edit', [TuwitController::class,'edit'])->name('tuwit.edit');
Route::put('/tuwit/{id}', [TuwitController::class,'update'])->name('tuwit.update');
Route::delete('/tuwit/{id}', [TuwitController::class,'destroy'])->name('tuwit.destroy');
Route::get('/profile', [ProfileController::class,'index']);
Route::get('/terms', [TermsController::class,'index']);
