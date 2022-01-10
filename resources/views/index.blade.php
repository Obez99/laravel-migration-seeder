@extends('layouts/bootstrap_default')

@section('content')
  <div class="container">
    <div class="row row-cols-2">
      @foreach ($trips as $trip)
        <div class="col g-3">
          <div class="card" style="width: 100%; height:100%">
            <img src="{{$trip->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-capitalize">{{$trip->name}}</h5>
              <p class="card-text">{{$trip->description}}</p>
              <a href="{{route('trip', ["id"=>$trip->id])}}" class="btn btn-primary">Più dettagli</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection