@extends('layouts.app')

<style>
h2{
  font-family: 'Roboto', sans-serif;
  
} 
.dA{
  display: inline-block;
}
.ba{
  padding-top:35px;
  float: right;
}
.delete{
  font-size: 100%;
  font-family: inherit;
  border: 0;
  padding: 0;
  margin: 0;
  background-color:white;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
  

}
.delete_form{
  margin: 0;
}
</style>

@section('body')

    <div  class="dA">
    <h2 class="">Edit Users </h2>
    </div>
    <div class="dA ba">
    <div class="right-align">
    <a href="users/create" class="btn-floating btn-large waves-effect waves-light blue  right-align"><i class="material-icons">add</i></a>
    </div>
    </div>

    <table class='responsive-table'>
        <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Delete</th> 
              <th>Edit</th> 
          </tr>
        </thead>
        <tbody>
        @foreach($userdetails as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td><form class="delete_form" action="{{ URL::route('users.destroy', $user['id']) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="delete"><a>Delete User</a></button>
            </form></td>
            <td><a href="users/{{$user->id}}/edit">Edit</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>

@endsection