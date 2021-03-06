<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisionController;

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

Route::get('/', [DivisionController::class, 'index']);
Route::get('create', [DivisionController::class, 'create']);
Route::post('create', [DivisionController::class, 'store'])->name('division.store');
