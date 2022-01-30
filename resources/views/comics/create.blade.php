@extends('layouts.main')

@section('content')

<main class="container">
  <h1>Inserisci comic</h1>

  <form action="{{ route('comics.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="titolo">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">description</label>
      <textarea type="text" class="form-control" name="description" id="description" placeholder="descrizione"></textarea>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="number" class="form-control" name="price" id="price" placeholder="prezzo">
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">thumb</label>
      <input type="text" class="form-control" name="thumb" id="thumb" placeholder="link immagine">
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">series</label>
      <input type="text" class="form-control" name="series" id="series" placeholder="serie">
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">sale_date</label>
      <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="sale_date">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">type</label>
      <input type="text" class="form-control" name="type" id="type" placeholder="tipo">
    </div>
    <button type="submit" class="btn btn-primary">Invia</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </form>

</main>

@endsection