<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'students';
    // Untuk mengizinkan data data dibawah ini untuk diisi
    protected $fillable = [
        'name',
        'address',
        'phone',
        'gender',
        'age',
        'nisn',
    ];
}
