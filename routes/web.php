<?php

use Illuminate\Support\Facades\Route;

Route::get('/employee/index', function(){
    return view('pages.employee.index');
});

Route::get('/employee/create', function(){
    return view('pages.employee.create');
});


Route::get('/', function(){
    return view('layouts.masters');
});