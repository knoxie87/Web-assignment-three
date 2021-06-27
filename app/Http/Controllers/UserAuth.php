<?php

namespace App\Http\Controllers;
use App\Http\controllers\UserAuth;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Hash;



class UserAuth extends Controller
{
    function userLogin(Request $request){
        
        $request->validate([
            'email' => 'required',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $data= $request->all();
            $user = user::where('email', $data['email'])->first();
    
                if(($user->role)=='admin')
                {
                    $request->session()->put('admin', $user['name']);
        
                }else{
                    $request->session()->put('user', $user['name']);
                }   
        }else{
            return back()->withErrors('Wrong username or password');

        }

        return redirect('users');
    }
    

    function userregister(Request $req){
        
        $req->validate([
            'name' => 'required|min:1',
            'email' => 'required|min:1|unique:users',
            'password' => 'required|min:1|string',
        ]);

        $data= $req->all();
        $user = user::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        return redirect('users');

}
    
}

