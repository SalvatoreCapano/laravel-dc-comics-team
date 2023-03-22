{{-- @extends('layouts.mainLayout') --}}

{{-- SECTION MAIN --}}
{{-- @section('page_content') --}}

<div class="container">
  <h1>
    CURRENT SERIES
  </h1>
  <a href="{{ route('comics.create') }}" class="btn btn-success mt-4">
    Aggiungi fumetto
  </a>
  <div class="cards-container">
      @foreach ($comics as $comic)        
      <div class="card">
        <div> 
          <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <h4 class="bg-dark">
            {{ $comic->series }}
        </h4>
        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
            Vedi dettagli
        </a>
      </div>
      @endforeach
  </div>

  <button>
    load more
  </button>
</div>

{{-- @endsection --}}