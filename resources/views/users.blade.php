<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('js/materialize.min.js')}}"></script>

    <title>Document</title>
</head>
<body>
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
</body>
</html>