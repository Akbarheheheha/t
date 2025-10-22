<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/app', function () {
    return view('layouts.app');
});


Route::get('/student', [App\Http\Controllers\StudentController::class, 'index']);

Route::get('/student/form', [App\Http\Controllers\StudentController::class, 'create']);

Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store']);

Route::get('/', function () {
    return view('formStudent');
});

Route::get('/dashboard', function () {
    return view('welcome');
});

