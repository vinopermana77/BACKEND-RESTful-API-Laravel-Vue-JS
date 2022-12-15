<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/get_employee/{id}', [EmployeeController::class, 'get']);
Route::post('/create', [EmployeeController::class, 'store']);
Route::delete('/delete/{id}', [EmployeeController::class, 'destroy']);
Route::post('/update/{id}', [EmployeeController::class, 'update']);
