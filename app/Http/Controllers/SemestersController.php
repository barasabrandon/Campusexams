<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemestersController extends Controller
{
    
    public function semesters(){
        return view('Semesters.all_semesters');
    }
    public function semester_one(){
        return view('Semesters.semestr1');
    }

    public function semester_two(){
        return view('Semesters.semestr_two');
    }
}
