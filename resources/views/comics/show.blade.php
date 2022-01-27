@extends('layouts.main')

@section('content')

<main class="container">
  <h1>{{$comic->title}}</h1>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dicta rem rerum temporibus! Nemo minus quaerat numquam asperiores? Molestiae possimus numquam dolorem quo assumenda delectus quaerat eveniet dignissimos beatae nisi?
  </p>
  <a href="{{route('comics.index')}}">Back</a>
</main>

@endsection