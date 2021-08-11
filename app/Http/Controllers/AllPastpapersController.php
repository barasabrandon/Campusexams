<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pastpaper;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AllPastpapersController extends Controller
{
    public function allPastpapers()
    {
        
        $users = User::all();   
        $allpastpapers = Pastpaper::orderBy('created_at', 'desc')->get();
        
        return view('pastpapers.allpastpapers')->with([
            'allpastpapers'=>$allpastpapers,
             'users' => $users,
             
        ]);
    }
}
