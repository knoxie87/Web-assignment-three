<?php

namespace App\Http\Controllers;
use App\Http\controllers\UserAuth;
use Illuminate\Http\Request;
use App\Models\user;


class UserAuth extends Controller
{
    function userLogin(Request $req){
       $data= $req->input();
       $req->session()->put('user',$data['user']);
       echo session ('user');
    }

    function userregister(Request $req){
        $data= $req->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']

        ]);
        }
    
}

