<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    
    //Sign in the user 
    public function postSignIn(Request $request){
        
        $this->validate($request,[
            'email' => 'required|email',
            'first_name'=>'required|max:120',
            'second_name'=>'required|max:120',
            'password' => 'required|min:5',
        ]);
        
        $first_name = $request['first_name'];
        $second_name = $request['second_name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        
        if($request['password'] === 'magic'){
            $person = new Person();
            $person->email = $email;
            $person->password = $password;
            $person->second_name = $second_name;
            $person->first_name = $first_name;
        
            $person->save();
        
            return redirect()->route('conversion')->with(['message' => 'Successfully LoggedIin']);
        }else{
            return redirect()->back()->with(['message' => 'email/password is incorrect']);
        }
        
        
        
    }
}

