@extends('layouts.app')

@section('body')
    <h2>hello {{session('user')}} </h2>
    <a href="/logout">logout</a>
    <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Delete</th> 
              <th>Edit</th> 
          </tr>
        </thead>
        <tbody>
        @foreach($userdetails as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>Delete</td>
            <td><a href="users/{{$user->id}}/edit">Edit</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>

@endsection