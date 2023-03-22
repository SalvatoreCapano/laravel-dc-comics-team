@extends('layouts.mainLayout')

@section('page_content')

<div class="container">
    <div class="row">
        <div class="col pb-5">
          <h1 class="card-title">{{ $comic->title }}</h1>
        </div>
    </div>
    <div class="row g-3">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <p class="card-title">{{ $comic->description }}</p>
          </div>

        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary mt-5 mb-5">Torna indietro</a>
      </div>
  </div>
</div>

@endsection