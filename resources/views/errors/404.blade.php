@extends('layouts.main')

@section('content')

<main class="container">
  <h1>Errore 404</h1>
  <h3>{{ $exception->getMessage() }}</h3>
</main>

@endsection