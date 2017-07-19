<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Config;

class InfoController extends Controller
{
    public function saveUser(Request $request,$id)
    {   //$request->input('trend')
        $fieldvalue = Config::get('major.trends.توسعه');
        $skills = Config::get('major.'.$fieldvalue);
//        foreach ($skills as $skill){
//            $array["$skill"] = 0;
//        }
        foreach ($skills as $skill){
            $array["$skill"] = $request->input($skill);
        }
        $user = User::findorfail($id);
        $user->data = json_encode([
                'intro'=>[
                    "name"=>$user->name,
                    "email"=>$user->email,
                    "phone"=>$user->phone,
                    "section"=>$user->section,
                    "university"=>$user->university,
                    "major"=>$user->major
                ],
                'trend'=> $request->input('trend'),
                'skills'=>[
                    $array
                ],
                'tobelearn'=>[
                    $request->input('wanted'),
                ]
            ]
        );
        
        $user->save();
        return $user;

    }
    
}
