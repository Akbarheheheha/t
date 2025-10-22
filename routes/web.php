<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/app', function () {
    return view('layouts.app');
});


Route::get('/student', function () {
    $student = [
        'name' => '',
        'address' => '',
        'phone' => '',
        'gender' => '',
        "age" => "",
        "nisn" => ""
    ];
    return view('indexstudent', compact('student'));
});

Route::get('/student/form', function () {
    return view('formStudent');
});

Route::post('/student/store', function (Request $request) {
    $student = $request->validate( [
        "name" => "|min:2",
        "address" => "|min:2",
        "phone" => "|min:11",
        "gender" => "|min:4",
        "age" => "|min:1",
        "nisn" => "|min:10",
    ],[
        'name.required' => 'nama harus diisi',
        'name.min' => 'nama harus minimal 2 karakter',
        'address.required' => 'alamat harus diisi',
        'address.min' => 'alamat harus minimal 2 karakter',
        'phone.required' => 'nomor harus diisi',
        'phone.min' => 'nomor harus minimal 11 karakter',
        'gender.required' => 'gender harus diisi',
        'gender.min' => 'gender harus minimal 4 karakter',
        'age.required' => 'umur harus diisi',
        'age.min' => 'umur harus minimal 1 karakter',
        'nisn.required' => 'nisn harus diisi',
        'nisn.min' => 'nisn harus minimal 10 karakter',
    ]);
    return view('indexstudent', compact('student'));
});

Route::get('/', function () {
    return view('formSTudent');
});

Route::get('/dashboard', function () {
    return view('welcome');
});

