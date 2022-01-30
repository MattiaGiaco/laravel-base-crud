@extends('layouts.main')

@section('content')

<main class="container">
  <h1>Comics</h1>

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Sale date</th>
        <th scope="col">Type</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comicList as $comic)
        <tr>
          <th scope="row">{{ $comic->id }}</th>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->price }}</td>
          <td>{{ $comic->series }}</td>
          <td>{{ $comic->sale_date }}</td>
          <td>{{ $comic->type }}</td>
          <td><a href="{{route('comics.show', $comic)}}" class="btn btn-success">SHOW</a></td>
          <td><a href="{{route('comics.edit', $comic)}}" class="btn btn-primary">EDIT</a></td>
          <td><a href="{{route('comics.destroy', $comic)}}" class="btn btn-danger">DELETE</a></td>
        </tr>
       @endforeach
    </tbody>
  </table>

  {{$comicList->links()}}
</main>

@endsection