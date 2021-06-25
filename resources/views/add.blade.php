@extends('layouts.app')

@section('body')


<form action="/users" method="POST">
    @csrf
    <div class="row">

    <div class="input-field col s12 m6 l6">
    <input type="text" name="email" placeholder="enter user email"><br><br>
    </div>

    <div class="input-field col s12 m6 l6">
    <input type="password" name="password" placeholder="enter user password"><br><br>
    </div>

    <div class="input-field col s12 m6 l6">
    <input type="text" name="name" placeholder="enter username"><br><br>
    </div>

    <div class="input-field col s12 m6 l6">
    <button class="btn waves-effect #1976d2 blue darken-2" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
    </div>

  @endsection