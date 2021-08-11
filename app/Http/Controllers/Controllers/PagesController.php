<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('Pages.home');
    }

    public function about(){
        return view('Pages.about');
    }

    public function pastpapers(){
        return view('Pages.pastpapers');
    }

    public function tutorial(){
        return view('Pages.tutorial');
    }

    public function references(){
        return view('Pages.references');
    }

    public function contact_us(){
        return view('Pages.contact_us');
    }
}
