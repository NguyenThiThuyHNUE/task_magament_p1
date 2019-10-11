<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function ChangeLanguage(Request $request){
        $locale=$request->lang;
        Session::put('local',$locale);
//        dd(Session::get('local'));
        return back();
    }
}
