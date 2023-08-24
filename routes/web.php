<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/employee/index', [EmployeeController::class, 'index']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee/store', [EmployeeController::class, 'store']);
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit']);
Route::post('/employee/update', [EmployeeController::class, 'update']);
Route::get('employee/delete/{id}', [EmployeeController::class, 'delete']);

Route::get('/dashboard', function(){
    return view('layouts.masters');
})->middleware('auth');

Route::get('/', function(){
    return redirect('/login');
});
