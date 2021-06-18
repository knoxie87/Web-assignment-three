<?php

namespace App\Http\Controllers;
use App\Http\controllers\UserAuth;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;



class UserAuth extends Controller
{
    function userLogin(Request $request){
        $data= $request->all();
        $userData = user::wherein('email',$data['email']);
     echo ($userData->id);
     //   echo($userData->id);
     //   echo(Auth::loginUsingId($userData->id));
      
       

    //    $data= $req->input();
    //    $req->session()->put('user',$data['user']);
    //    echo session ('user');
    }
    

    function userregister(Request $req){
        $data= $req->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']

        ]);
        Auth::login($user);
        }
    
}

