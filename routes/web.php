<?php

use App\Livewire\QuadraticEquation\QuadraticEquationLogViewer;
use App\Livewire\QuadraticEquation\QuadraticEquationSolve;
use Illuminate\Support\Facades\Route;

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

Route::get("/", QuadraticEquationSolve::class)->name("equation-quadratic-solve");
Route::get("logs", QuadraticEquationLogViewer::class)->name("quadratic-equation-log");
