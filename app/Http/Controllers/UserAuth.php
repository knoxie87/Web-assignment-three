<?php

namespace App\Http\Controllers;
use App\Http\controllers\UserAuth;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;




class UserAuth extends Controller
{
    function userLogin(Request $request){
        $data= $request->all();
        $user = user::where('email', $data['email'])->first();
        $request->session()->put('user', $user['name']);
        
        return redirect('users');
    }
    

    function userregister(Request $req){
        $data= $req->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);
        return redirect('users');

}
    
}

