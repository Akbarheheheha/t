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
    return view('dashboard');
});

Route::get("/student/cekObject", [App\Http\Controllers\StudentController::class, 'cekObject']);

Route::get("/student/insert", [App\Http\Controllers\StudentController::class, 'insert']);

Route::get("/student/isiBanyak", [App\Http\Controllers\StudentController::class, 'MassAssigment']);
Route::get("/tugas", [App\Http\Controllers\TugasController::class, 'insert']);
Route::get("/subject", [App\Http\Controllers\SubjectController::class, 'insert']);
