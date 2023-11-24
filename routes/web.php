<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index'])->name('home');

Route::get('/create', [StudentController::class, 'create']);
Route::post('/create', [StudentController::class, 'store']);

Route::get('/update/{id}', [StudentController::class, 'edit']);
Route::put('/update/{id}', [StudentController::class, 'update']);

Route::delete('/delete/{id}', [StudentController::class, 'destroy']);





