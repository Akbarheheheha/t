<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\MassAssignmentException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;

class StudentController extends Controller
{
    public function create()
    {
        return view('formStudent');
    }

    public function index()
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
        return view('indexstudent', compact('student', 'arrSiswa'));
    }

    public function store(Request $request)
    {
        $student = $request->validate([
            "name" => "required|string|min:5",
            "address" => "required|string|min:10",
            "phone" => "required|min:10",
            "gender" => "required",
            "age" => "required|integer|min:10",
            "nisn" => "required|min:10"
        ], [
            "name.required" => "Nama harus diisi",
            "name.min" => "Nama minimal 12 karakter",
            "address.required" => "Alamat harus diisi",
            "address.min" => "Alamat minimal 20 karakter",
            "phone.required" => "No Telp harus diisi",
            "phone.min" => "No telepon harus 10 angka",
            "gender.required" => "Gender harus diisi",
            "age.required" => "Umur harus diisi",
            "age.min" => "Umur minimal 10 tahun",
            "nisn.required" => "NISN harus diisi",
            "nisn.min" => "NISN harus terdiri dari 10 angka"
        ]);

        // Simpan langsung ke database tanpa model
        DB::table('students')->insert([
            'name' => $student['name'],
            'address' => $student['address'],
            'phone' => $student['phone'],
            'gender' => $student['gender'],
            'age' => $student['age'],
            'nisn' => $student['nisn'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Kirim data ke view
        return view('indexStudent', compact('student'));
    }
    public function cekObject()
    {
        $student = new Siswa();
        dump($student);
    }
    public function insert()
    {
        $student = new Siswa();
        $student->name = 'akbar';
        $student->address = 'genteng';
        $student->nisn = '08978630225';
        $student->phone = 'genteng';
        $student->age = '17';
        $student->save();
        dump($student);

    }

    public function MassAssigment()
    {
        Siswa::create([
            'name' => 'Akbar',
            'address' => 'Genteng',
            'nisn' => '123456789',
            'phone' => '0812345678',
            'age' => 10
        ]);

        return "Berhasil masuk datanya anjeng";
    }
}
;

