<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;

use DB;

class ExamsPdfController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' =>[ 'samplea','sampleb']]);
    }

    public function sampleece(){

        $sampleece = public_path()."/pdf/sampleece.pdf";
        $headers = array(
            'Content-Type:application/pdf',
        );
        return Response::download($sampleece, "sampleece.pdf", $headers);
    }

//Samplea
    public function Samplea(){
        $samplea = public_path()."/pdf/samplea.pdf";
        $headers = array(
            'Content-Type:application/pdf'
        );

        return Response::download($samplea, "samplea.pdf",$headers );
    }

    //Sampleb
    public function Sampleb(){
        $sampleb = public_path()."/pdf/sampleb.pdf";
        $headers = array(
            'Content-Type:application/pdf'
        );

        return Response::download($sampleb, "sampleb.pdf", $headers );
    }

    
    public function Samplec(){
        $samplec = public_path()."/pdf/samplec.pdf";
        $sampleaHeaders = array(
            'Content-Type:application/pdf'
        );

        return Response::download($samplec, "samplec.pdf", $headers);
    }

    
    public function Sampled(){
        $sampled = public_path()."/pdf/sampled.pdf";
        $headers = array(
            'Content-Type:application/pdf'
        );

        return Response::download($sampled, "sampled.pdf",$headers);
    }

    
    public function Samplee(){
        $samplee = public_path()."/pdf/samplee.pdf";
        $headers = array(
            'Content-Type:application/pdf'
        );

        return Response::download($samplee, "samplee.pdf", $headers);
    }
    
    public function Samplef(){
        $samplef = public_path()."/pdf/samplef.pdf";
        $headers = array(
            'Content-Type:application/pdf'
        );

        return Response::download($samplef, "samplef.pdf", $headers);
    }

    public function Sampleg(){
        $sampleg = public_path()."/pdf/sampleg.pdf";
        $headers = array(
            'Content-Type:application/pdf'
        );

        return Response::download($sampleg, "sampleg.pdf", $headers);
    }
    public function Sampleh(){
        $sampleh = public_path()."/pdf/sampleh.pdf";
        $headers = array(
            'Content-Type:application/pdf'
        );

        return Response::download($sampleh, "sampleh.pdf", $headers);
    }
    public function Samplei(){
        $samplei = public_path()."/pdf/samplei.pdf";
        $headerss = array(
            'Content-Type:application/pdf'
        );

        return Response::download($samplei, "samplei.pdf", $headers);
    }
    public function Samplej(){
        $samplej = public_path()."/pdf/samplej.pdf";
        $headers = array(
            'Content-Type:application/pdf'
        );

        return Response::download($samplej, "samplej.pdf", $headers);
    }

 
}
