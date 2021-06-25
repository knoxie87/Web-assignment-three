@extends('layouts.app')

@section('body')
<style>
h2{
  font-family: 'Roboto', sans-serif;
} 
</style>


<h2>Edit {{$user->name}}</h2>

<form  method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="row">

    <input type="hidden" name="id" value="{{$user->id}}">

    <div class="input-field col s6"> 
    <input type="text" name="email" placeholder="{{$user->email}}"><br><br>
    </div>

    <div class="input-field col s6">
    <input type="password" name="password" placeholder="Enter Password"><br><br>
    </div>

    <div class="input-field col s6">
    <input type="text" name="name" placeholder="{{$user->name}}"><br><br>
    </div>

    <button class="btn waves-effect #1976d2 blue darken-2" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
</form>

@endsection
