@extends('layouts/bootstrap_default')

@section('content')
  <div class="container">
    <h1 class="text-capitalize text-center mt-5">{{$trip->name}}</h1>
    <div class="trip-image">
      <img src="{{$trip->image}}" alt="{{$trip->name}}" class="w-100 my-3">
    </div>

    <div class="trip-details my-5">
      <h4>Descrizione:</h4>
      <p>{{$trip->description}}</p>
      <h4>Destinazioni:</h4>
      <p>{{str_replace(" ", ",",$trip->destinations)}}.</p>
      <h4>Prezzo:</h4>
      <span>€{{$trip->price}}</span>
    </div>

    <a href="{{route('index')}}" class="btn btn-primary mb-5">Torna alla home</a>
  </div>
@endsection