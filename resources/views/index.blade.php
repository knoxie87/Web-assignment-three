<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
        <title>Laravel</title>

        <style>
        .card-image .responsive-img {
        width: 100%;
        height: 100%;
        }
        </style>
</head>
    

    </body>
  <nav>
    <div class="nav-wrapper #b3e5fc #1976d2 blue darken-2">
      <a href="#" class="brand-logo">Geonet Volcanoes</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Login</a></li>
        <li><a href="badges.html">Logout</a></li>
      </ul>
    </div>
  </nav>



<div class="row">
@foreach($properties as $propertie)

    <div class="col s2">
      <div class="card card small">
        <div class="card-image">
          <img class="responsive-img" src="images\{{$propertie['volcanoID']}}.jpg">
          <span class="card-title">{{$propertie['volcanoTitle']}}</span>
        </div>
        <div class="card-content">
          <p></p>
        </div>
        <div class="card-action">
          <a href="#">{{$propertie['activity']}}</a>
        </div>
      </div>
    </div>
@endforeach
</div>

<footer class="page-footer #b3e5fc #1976d2 blue darken-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"></h5>
          <p class="grey-text text-lighten-4"></p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2020 Andrew-Knox
      </div>
    </div>
  </footer>

        <script src="{{asset('js/materialize.min.js')}}"></script>
    </body>
</html>
