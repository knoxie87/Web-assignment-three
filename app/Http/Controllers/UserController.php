<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $userdetails = user::all();
        
        return view('users', ['userdetails' => $userdetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:1',
            'email' => 'required|min:1|unique:users',
            'role' => 'required',
            'password' => 'required|min:1|string',
        ]);

        $data= $request->all();
        Log::info($data);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => Hash::make($data['password'])
        ]);
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        return view('add');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $user = User::findorfail($id);

    return view('user', ['user' => $user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user)
    {
        $data = $request->all();
        
        $request->validate([
            'name' => 'required|min:1',
            'email' => 'required|min:1',
            'role' => 'required',
            'password' => 'required|min:1|string',
        ]);

        User::where('id', $user)
        ->update([
           'name' => $data['name'],
           'password' => Hash::make($data['password']),
           'email' => $data['email'],
           'role' => $data['role']
        ]);

    return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::find($id);

        $user->delete();
        
        return redirect('users');

    }
}
