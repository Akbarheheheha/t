<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function insert()
    {
        $subject = new subject();
        $subject->subject_name = 'yatno';
        $subject->save();
        dump($subject);

    }
}
