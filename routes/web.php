<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('ajax-crud-datatable', [EmployeeController::class, 'index']);
Route::post('store-employee', [EmployeeController::class, 'store']);
Route::post('edit-employee', [EmployeeController::class, 'edit']);
Route::post('delete-employee', [EmployeeController::class, 'destroy']);