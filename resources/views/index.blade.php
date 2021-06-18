<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
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
      @media only screen and (min-width: 601px) {
  .card.responsive-horizontal {
    display: flex;
  }
  .card.responsive-horizontal.small .card-image, .card.responsive-horizontal.medium .card-image, .card.responsive-horizontal.large .card-image {
    height: 100%;
    max-height: none;
    overflow: visible;
  }
  .card.responsive-horizontal.small .card-image img, .card.responsive-horizontal.medium .card-image img, .card.responsive-horizontal.large .card-image img {
    max-height: 100%;
    width: auto;
  }
  .card.responsive-horizontal .card-image {
    max-width: 50%;
  }
  .card.responsive-horizontal .card-image img {
    border-radius: 2px 0 0 2px;
    width: auto;
    max-width: 100%;
  }
  .card.responsive-horizontal .card-stacked {
    position: relative;
    display: flex;
    flex-direction: column;
    flex: 1;
  }
  .card.responsive-horizontal .card-stacked .card-content {
    flex-grow: 1;
  }
}

</style>
</head>
    
</body>
  <header>
  <nav>
    <div class="nav-wrapper #b3e5fc #1976d2 blue darken-2">
      <a href="#" class="brand-logo">Geonet Volcanoes</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/login">Login</a></li>
        <li><a href="badges.html">Logout</a></li>
      </ul>
    </div>
  </nav>

  </header>


  <main>
  <div class="row">
@foreach($properties as $propertie)

    <div class="col m2">
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
        <script src="{{asset('js/materialize.min.js')}}"></script>
</body>
</html>
