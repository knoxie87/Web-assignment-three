@extends('layouts.app')

@section('body')
<style>


</style>

<div class="row">
@foreach($properties as $propertie)

    <div class="col s12 m6 l4">
      <div class="card">

        <div class="card-image">
          <img class="responsiv-img activator" src="images\{{$propertie['volcanoID']}}.jpg">
          <span class="card-title">{{$propertie['volcanoTitle']}}</span>
        </div>

        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">{{$propertie['activity']}}</span>
      </div>

      <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{$propertie['volcanoTitle']}}<i class="material-icons right">close</i></span>
      <h6>Current Level: {{$propertie['level']}} </h6>
      <h6>Current hazards: {{$propertie['hazards']}} </h6>
      <h6>Current ACC: {{$propertie['acc']}} </h6>
    </div>

    </div>
  </div>
@endforeach
</div>
@endsection
