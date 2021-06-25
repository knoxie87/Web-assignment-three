@extends('layouts.app')

<style>
h2{
  font-family: 'Roboto', sans-serif;
} 
</style>

@section('body')
    <h2>Edit Users </h2>
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