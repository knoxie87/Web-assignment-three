@extends('layouts.app')

@section('body')


<form action="/users" method="POST">
    @csrf
    <div class="row">
    <div class="input-field col s12 m6 l6">
    <input type="text" name="email" placeholder="enter user email"><br><br>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>


    <div class="input-field col s12 m6 l6">
    <input type="password" name="password" placeholder="enter user password"><br><br>
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="input-field col s12 m6 l6">
    <input type="text" name="name" placeholder="enter username"><br><br>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="input-field col s12 m6 l6">
    <select name="role">
      <option value="user" disabled selected>Choose role</option>
      <option value="admin">admin</option>
      <option value="user">user</option>
    </select>
  </div>

    <div class="input-field col s12 m6 l6">
    <button class="btn waves-effect #1976d2 blue darken-2" type="submit">Submit
    <i class="material-icons right">send</i>
     </button>
    </div>
<script>
    $(document).ready(function(){
    $('select').formSelect();
  });
</script>

</form>

  @endsection