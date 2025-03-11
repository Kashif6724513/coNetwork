<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeImportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/customer', [CustomerController::class, 'index']);
    Route::post('/customer/store', [CustomerController::class, 'store']);
    Route::get('/customer/show/{id}', [CustomerController::class, 'show']);
    Route::put('/customer/update/{id}', [CustomerController::class, 'update']);
    Route::delete('/customer/delete/{id}', [CustomerController::class, 'delete']);

    Route::get('/employees', [EmployeeImportController::class, 'getEmployees']);
    Route::post('/import-employees', [EmployeeImportController::class, 'import']);
});
