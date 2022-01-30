@extends('layouts.main')

@section('content')

<main class="container my-5">
  
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4 d-flex flex-column justify-content-center">
        <img src="{{ $comic->thumb }}" class="img-fluid rounded-start" alt="{{$comic->title}}">
      </div>
      <div class="col-md-8">
        <div class="card-body ">
          <h2 class="card-title">{{$comic->title}}</h2>
          <p class="card-text">{!!$comic->description!!}</p>
          <h5 class="card-title">Price: {{$comic->price}}$</h5>
          <h5 class="card-title">Sale date: {{$comic->sale_date}}</h5>
          <p class="card-text"><small class="text-muted">{{$comic->type}}</small></p>
          <button class="btn btn-primary"><a class="text-white" href="{{route('comics.edit', $comic)}}">EDIT</a></button>
        </div>
      </div>
    </div>
  </div>

  <a href="{{route('comics.index')}}"> << Back</a>
  
  
</main>

@endsection