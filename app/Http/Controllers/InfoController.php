<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Config;
use Illuminate\Support\Facades\Input;

class InfoController extends Controller
{
    public function saveUser(Request $request)
    {
        $input=Input::all();
        $validator = \Validator::make($input, [
            'name'=>'required|min:2',
            'major'=>'required',
            'university'=>'required',
            'grade'=>'required',
            'email'=>'required|email|unique:users',
            'phone' => 'required|max:11|min:11|regex:/(09)[0-9]{9}/'

        ],[
            'name.min'=>'نام وارد شده باید بیشتر از 2 کارکتر داشته باشد.',
            'name.required'=>'شما حتما باید نام را وارد کنید.',
            'email.required'=>'شما حتما باید ایمیل خود را بنویسید.',
            'email.unique'=>'ایمیل تکراری میباشد',
            'university.required'=>'شما باید دانشگاه خود را وارد کنید.',
            'major.required'=>'شما باید رشته تحصیلی خود را وارد کنید.',
            'grade.required'=>'شما حتما باید مقطع تحصیلی خود را بنویسید.',
            'phone.required'   => 'موبایل الزامی است.',
            'phone.min'        => 'موبایل شما معتبر نیست.',
            'phone.regex' =>'فرمت شماره تماس درست نیست از فرمت مثالی ۰۹۳۰۱۱۰۱۰۱۰ استفاده نمایید.'
        ]);
        if ($validator->fails()) {
            return redirect('/formdata')
                ->withErrors($validator)
                ->withInput();
        }
        $user=new User();
        $user->name=Input::get('name');
        $user->email=Input::get('email');
        $user->phone=Input::get('phone');
        $fields=[];
        for($i=0; $i< Config::get('major.count_field');$i++){
            if(Input::get('t'.$i)){
                $fields[]=Input::get('t'.$i);
            }
        }
        $skill = [
//            'name' => ''
//            'rate'=>2,
        ];
        $want = [];
        for($j=0; $j< count(Config::get('major.t0'));$j++){
            //if(Input::get('t'.$i.$j)){
            if(!is_null(Input::get('t0'.$j.'r')))
                $skill['t0'.$j] = [
                    "name" => Config::get('major.t0'.'.t0'.$j),
                    "rate" => Input::get('t0'.$j.'r')
                ];
            //}
        }
        for($i=1; $i< Config::get('major.count_field');$i++){
            if(Input::get('t'.$i)){
                for($j=0; $j< count(Config::get('major.t'.$i));$j++){
                    //if(Input::get('t'.$i.$j)){
                        if(!is_null(Input::get('t'.$i.$j.'r')))
                            $skill['t'.$i.$j] = [
                                "name" => Config::get('major.t'.$i.'.t'.$i.$j),
                                "rate" => Input::get('t'.$i.$j.'r')
                            ];
                    //}
                }
            }
        }
        
//        for($i=0; $i< Config::get('major.count_field');$i++){
//            if(isset($input['t'.$i])){
//                for($j=0; $j< count(Config::get('major.t'.$i));$j++){
//                    if(isset($input['t'.$i.$j])){
//                        $skill['t'.$i.$j] = [
//                            'name' => $input['t'.$i.$j],
//                            'rate' => $input['t'.$i.$j.'r']
//                        ];
//                    }
//                }
//            }
//        }

        for($i=0; $i< Config::get('major.count_field');$i++){
            if(Input::get('t'.$i)){
                for($j=0; $j< count(Config::get('major.t'.$i));$j++){
                    if(Input::get('t'.$i.$j.'w')){
                        $want[] = Input::get('t'.$i.$j.'w');
                    }
                }
            }
        }
        $user->data = json_encode([
                "intro"=>[
                    "grade"=>Input::get('grade'),
                    "university"=>Input::get('university'),
                    "major"=>Input::get('major'),
                    "description"=>Input::get('desctiption')
                ],
                "fields"=> $fields,
                "skills"=>[
                        $skill,
                ],
                "tobelearn"=>[
                    $want,
                ]
            ]);

        $user->save();
        return $user->data;

    }

    public function data()
    {
        $grades = array_keys(Config::get('major.grades'));
        $majors = array_keys(Config::get('major.majors'));
        $fields = array_keys(Config::get('major.fields'));
        $skills = [];

        for($i=0; $i< Config::get('major.count_field');$i++){
            $skills[] = array_values(Config::get('major.t'.$i));
        }
        return view('index')->with(['grades'=>$grades,'majors'=>$majors,'skills'=>$skills,'fields'=>$fields]);
//        return view('data');
    }

    public function show()
    {
        $grades = array_keys(Config::get('major.grades'));
        $majors = array_keys(Config::get('major.majors'));
        $fields = array_keys(Config::get('major.fields'));
        $skills = [];

        for($i=0; $i< Config::get('major.count_field');$i++){
            $skills[] = array_values(Config::get('major.t'.$i));
        }
        return view('data')->with(['grades'=>$grades,'majors'=>$majors,'skills'=>$skills,'fields'=>$fields]);
    }
}
