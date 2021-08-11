<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TutorialPdfController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' =>[ 'index','show']]);
    }
    
    public function probabilityPdf() {
        $probabilityFile = public_path()."/tutorialPdf/probability.pdf";

        $headers = array(
            'Content-Type"application/pdf',
        );

        return Response::download($probabilityFile, "probability.pdf", $headers);
    }
}
