@extends('layouts.main')

@section('content')

<main class="container">
  <h1>Inserisci comic</h1>

  @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  

  <form action="{{ route('comics.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" 
      class="form-control @error('title') is-invalid @enderror" 
      value="{{ old('title') }}"
      name="title" id="title" placeholder="titolo">
      @error('title')
        <p class="form_errors">
          {{ $message }}
        </p>
      @enderror
      
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">description</label>
      <textarea type="text" class="form-control @error('description') is-invalid @enderror" 
      name="description" id="description" placeholder="descrizione">{{ old('description') }}</textarea>
      @error('description')
        <p class="form_errors">
          {{ $message }}
        </p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="number" class="form-control @error('price') is-invalid @enderror" 
      value="{{ old('price') }}" name="price" id="price" placeholder="prezzo">
      @error('price')
        <p class="form_errors">
          {{ $message }}
        </p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">thumb</label>
      <input type="text" class="form-control @error('thumb') is-invalid @enderror" 
      value="{{ old('thumb') }}" name="thumb" id="thumb" placeholder="link immagine">
      @error('thumb')
        <p class="form_errors">
          {{ $message }}
        </p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">series</label>
      <input type="text" class="form-control @error('series') is-invalid @enderror" 
      value="{{ old('series') }}" name="series" id="series" placeholder="serie">
      @error('series')
        <p class="form_errors">
          {{ $message }}
        </p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">sale_date</label>
      <input type="text" class="form-control @error('sale_date') is-invalid @enderror" 
      value="{{ old('sale_date') }}" name="sale_date" id="sale_date" placeholder="sale_date">
      @error('sale_date')
        <p class="form_errors">
          {{ $message }}
        </p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">type</label>
      <input type="text" class="form-control @error('type') is-invalid @enderror" 
      value="{{ old('type') }}" name="type" id="type" placeholder="tipo">
      @error('type')
        <p class="form_errors">
          {{ $message }}
        </p>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Invia</button>
    <button type="reset" class="btn btn-danger">Reset</button>
  </form>

</main>

@endsection