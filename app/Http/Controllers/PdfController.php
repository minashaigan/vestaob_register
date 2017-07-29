<?php

namespace App\Http\Controllers;

use App\User;
use Barryvdh\DomPDF\PDF;

use Illuminate\Http\Request;
//Use PDF;
//use TCPDF_FONTS;


class PdfController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index($email)
    {




        $user=User::where('email',$email)->first();

        $data=json_decode($user->data);
        $intro=array();
        $fields=array();
        $skills=array();
        $tobelearn=array();

        foreach ($data as $all=>$value) {

            if($all=="intro")
            {
                $intro[]=$value;
            }
            if($all=="fields")
            {


                    $fields[]=$value;


            }
            if($all=="skills")
            {
                $skills[]=$value;
            }
            if($all=="tobelearn")
            {
                $tobelearn[]=$value;
            }
        }





        if(! is_null($user))
        {
            return view('pdf')
                ->with(['user'=>$user,'intro'=>$intro,'fields'=>$fields,'skills'=>$skills,'tobelearn'=>$tobelearn]);

//            $pdf = \PDF::loadView('pdf');
//            return $pdf->download('resumeee.pdf');
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

    public function users()
    {
        $users=User::all();
        $count=count($users);
        foreach ($users as $user){
            $user->data=(array) json_decode($user->data);
        }
        return view('show_users')->with(['users'=>$users,'count'=>$count]);
    }
}
