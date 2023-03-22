@extends('layouts.mainLayout')

@section('page_content')
<h1 class="sectionTitle">Modifica il fumetto {{ $comic->title }}</h1>

@if ($errors->any())
    <div class="errorContainer">
        <h3>Error !!!</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="formContainer">

    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="editForm">
        @csrf
        @method('PUT')

        <div class="inputs">
            <div class="inputGroup">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" required maxlength="128"
                    value="{{ old('title', $comic->title) }}" placeholder="Inserisci il titolo">
            </div>

            <div class="inputGroup">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" required maxlength="128"
                    value="{{ old('series', $comic->series) }}" placeholder="Inserisci la serie">
            </div>

            <div class="inputGroup">
                <label for="type" class="form-label">Tipo</label>
                <select class="form-select" name="type" id="type" required>
                    <option {{ !isset($comic->type) ? 'selected' : '' }}>Seleziona un tipo</option>
                    <option value="comic book" {{ old('type', $comic->type) == 'comic book' ? 'selected' : '' }}>Comic
                        Book</option>
                    <option value="graphic novel" {{ old('type', $comic->type) == 'graphic novel' ? 'selected' : '' }}>
                        Graphic Novel
                    </option>
                </select>
            </div>

            <div class="inputGroup">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" required maxlength="255"
                    value="{{ old('thumb', $comic->thumb) }}" placeholder="Inserisci una descrizione">
            </div>

            <div class="inputGroup">
                <label for="sale_date" class="form-label">Data di pubblicazione</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" required maxlength="64"
                    value="{{ old('sale_date', $comic->sale_date) }}" placeholder="Inserisci la data di pubblicazione">
            </div>

            <div class="inputGroup">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" required maxlength="10"
                    value="{{ old('price', $comic->price) }}" placeholder="Inserisci il prezzo">
            </div>

            <div class="inputGroup">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3"
                    placeholder="Inserisci una descrizione...">{{ old('description', $comic->description) }}</textarea>
            </div>
        </div>

        <div class="btnContainer">
            <button type="submit" class="ctaBtn">
                Salva
            </button>
        </div>
    </form>

</div>
@endsection