<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function ShowFormSubsctibe(){
        return view('subscribe-form',['isValid'=>false]);
    }
    public function validateForm(Request $request){
        $validateData=$request->validate([
            'email'=>'required|email|max:255',
            'login'=>'required|alpha|max:255',
            'phone'=>'required|numeric'
        ]);
        return view ('subscribe-form',['isValid'=>true]);


    }

}
