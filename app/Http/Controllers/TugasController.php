<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function insert()
    {
        $student = [
            'name' => "Dannys Martha Favrillia",
            'address' => "Genteng",
            'phone' => "085645837298",
            'gender' => "laki-laki",
            'age' => "18",
            'nisn' => "008593372012`"
        ];

        $arrSiswa = ["Dannys", "Fajar", "Gio"];
        return view('tugas', compact('student', 'arrSiswa'));
    }
}
