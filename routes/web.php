<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/employee/index', [EmployeeController::class, 'index']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee/store', [EmployeeController::class, 'store']);
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit']);
Route::post('/employee/update', [EmployeeController::class, 'update']);
Route::get('employee/delete/{id}', [EmployeeController::class, 'delete']);

Route::get('/', function(){
    return view('layouts.masters');
});