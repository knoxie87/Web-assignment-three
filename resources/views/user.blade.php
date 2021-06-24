@extends('layouts.app')

@section('body')

<h1>Edit User {{$user->name}}</h1>

<form action="/" method="POST">
    <div class="row">

    <div class="input-field col s6">
    <input type="text" name="email" placeholder="{{$user->email}}"><br><br>
    </div>

    <div class="input-field col s6">
    <input type="password" name="password" placeholder="{{$user->password}}"><br><br>
    </div>

    <div class="input-field col s6">
    <input type="text" name="name" placeholder="{{$user->name}}"><br><br>
    </div>

    <button class="btn waves-effect #1976d2 blue darken-2" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
</form>

@endsection


git remote add origin https://github.com/knoxie87/Web-assignment-three.git