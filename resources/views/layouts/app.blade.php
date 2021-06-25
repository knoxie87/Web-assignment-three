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

<style>
.responsiv-img{
    height: 100%;
    width: 100%;
    object-fit: cover;
      }  
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}

main {
    flex: 1 0 auto;
}
} 
#mobile-demo{
    height: 100px;
    width: 100px;
}
.card-image{
  height: 250px;
}
</style>

<body>

</head>
<header>

<nav>
  <div class="nav-wrapper #b3e5fc #1976d2 blue darken-2">
  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

  <div class="container">
  <a href="/" class="brand-logo"><i class="material-icons">landscape</i>GeoVal</a>
  <ul class="right hide-on-med-and-down">

    @if (session()->has('user'))
    <li><a href="/users">Users</a></li>
    <li><a href="/logout">Logout</a></li>

    @else
      <li><a href="register">Register</a></li>
      <li><a href="login">Login</a></li>
    @endif

    </ul>
  </div>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
@if (session()->has('user'))
    <li><a href="/users">Users</a></li>
    <li><a href="/logout">Logout</a></li>

    @else
      <li><a href="register">Register</a></li>
      <li><a href="login">Login</a></li>
    @endif
</ul>

</header>
<main>
<div class="container">
    @section('body')

    @show
</div>
</main>

<footer class="page-footer #b3e5fc #1976d2 blue darken-2">
    <div class="footer-copyright">
      <div class="container left-align">© 2020 Andrew-Knox</a></div>
    </div>
  </footer>
<script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>

</body>
</html>

