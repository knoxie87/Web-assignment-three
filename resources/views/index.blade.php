<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>  
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/materialize.css')}}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>

<title>Laravel</title>

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
</style>


</head>
</body>

<header>

<nav>
  <div class="nav-wrapper #b3e5fc #1976d2 blue darken-2">
  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <a href="valconoes" class="brand-logo">Valcanoes</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="register">Register</a></li>
      <li><a href="login">Login</a></li>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li><a href="register">Register</a></li>
  <li><a href="login">Login</a></li>
</ul>

</header>


  <main>
  <div class="row">
@foreach($properties as $propertie)

    <div class="col s12 m4 l2">
      <div class="card card medium">
        <div class="card-image card medium">
          <img class="responsiv-img" src="images\{{$propertie['volcanoID']}}.jpg">
          <span class="card-title">{{$propertie['volcanoTitle']}}</span>
        </div>
        <div class="card-content">
        </div>
        <div class="card-action">
          <a href="#">{{$propertie['activity']}}</a>
        </div>
      </div>
    </div>
@endforeach
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
