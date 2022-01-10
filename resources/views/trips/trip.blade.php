@extends('layouts/bootstrap_default')

@section('content')
  <div class="container">
    <h1 class="text-capitalize text-center mt-5">{{$trips->name}}</h1>
    <div class="trip-image">
      <img src="{{$trips->image}}" alt="{{$trips->name}}" class="w-100 my-3">
    </div>

    <div class="trip-details my-5">
      <h4>Descrizione:</h4>
      <p>{{$trips->description}}</p>
      <h4>Destinazioni:</h4>
      <p>{{$trips->destinations}}</p>
      <h4>Prezzo:</h4>
      <span>€{{$trips->price}}</span>
    </div>
  </div>
@endsection