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

            'email'=>'required|email',
            'phone' => 'required|max:11|min:11|regex:/(09)[0-9]{9}/'

        ],[
            'name.min'=>'پیام وارد شده باید بیشتر از 2 کارکتر داشته باشد.',
            'name.required'=>'شما حتما باید نام را وارد کنید.',
            'email.required'=>'شما حتما باید ایمیل خود را بنویسید.',
            'phone.required'   => 'موبایل الزامی است.',
            'phone.min'        => 'موبایل شما معتبر نیست.',
            'phone.regex' =>'فرمت شماره تماس درست نیست از فرمت مثالی ۰۹۳۰۱۱۰۱۰۱۰ استفاده نمایید.'
        ]);
        if ($validator->fails()) {
            return redirect('/formdata')
                ->withErrors($validator)
                ->withInput();
        }
        $fields=[];
        for($i=0; $i<= Config::get('major.count');$i++){
            if(isset($input['a'.$i])){
                $fields[]=$input['a'.$i];
            }
        }
        $user=new User();
        $user->name=Input::get('name');
        $user->email=Input::get('email');
        $user->phone=Input::get('phone');
        $user->data = json_encode([
                'intro'=>[
                    "university"=>Input::get('university'),
                    "major"=>Input::get('major')
                ],
                'trend'=> $fields,
                'skills'=>[

                ],
                'tobelearn'=>[
                    $request->input('wanted'),
                ]
            ]
        );
        
        $user->save();
        return $user;

    }

    public function data()
    {
        return view('data');
    }
    
}
