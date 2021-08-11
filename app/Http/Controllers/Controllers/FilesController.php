<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    function index(Request $req)
    {
         return $req->file('file')->store('Client_uploads');
    }
}
