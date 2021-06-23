@extends('layouts.app')

@section('body')

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
@endsection
