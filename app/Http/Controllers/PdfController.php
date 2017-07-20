<?php

namespace App\Http\Controllers;

use App\User;
use Barryvdh\DomPDF\PDF;

use Illuminate\Http\Request;
//Use PDF;
//use TCPDF_FONTS;


class PdfController extends Controller
{

    public function index($email)
    {




        $user=User::where('email',$email)->first();
        if(! is_null($user))
        {
           // return view('pdf');

            $pdf = \PDF::loadView('pdf');
            return $pdf->download('resumeee.pdf');
//            $lg = Array();
//            $lg['a_meta_charset'] = 'UTF-8';
//            $lg['a_meta_dir'] = 'rtl';
//            $lg['a_meta_language'] = 'fa';
//            $lg['w_page'] = 'page';
//            $fontname = TCPDF_FONTS::addTTFfont(public_path().'/fonts/roya.ttf', 'TrueTypeUnicode', '', 120);
//            PDF::SetFont($fontname, '',14, '', false);
//
//// set some language-dependent strings (optional)
//            PDF::setLanguageArray($lg);
//            PDF::AddPage();
//            PDF::writeHTML(view('pdf', ['user'=>$user])->render());
//            PDF::output('resume.pdf', 'I');
//            return view('pdf');
            //return $user;

        }
        return 'email unfifinded';
    }
}
