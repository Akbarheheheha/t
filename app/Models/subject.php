<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['subject_name'];
}
