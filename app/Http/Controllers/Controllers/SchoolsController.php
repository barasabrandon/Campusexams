<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    public function engineering() {
        return view('Schools.engineering');
    }

    public function education() {
        return view('Schools.education');
    }

   
    public function business() {
        return view('Schools.business');
    }

    public function biological() {
        return view('Schools.biological');
    }

    //Added schools

    public function aerospace(){
        return view('Schools.aerospace');
    }

    public function agricultureAndNaturalResources() {
        return view('Schools.agricultureAndNaturalResources');
    }

    public function artAndScialSciences() {
        return view('Schools.artAndScialSciences');
    }

    public function informationSciences() {
        return view('Schools.informationSciences');
    } 
    //common course/Electives
    
    public function commoncourseOrElectives() {
        return view('Schools.commoncourseOrElectives');
    } 
    
//academic years
   public function academic_years() {
       return view('academic_years.academic_years');
   }

   public function academic_years_engineering() {
    return view('academic_years.academic_years_engineering');
}

   public function exampapers() {
       return view('academic_years.exampapers');
   }
}
