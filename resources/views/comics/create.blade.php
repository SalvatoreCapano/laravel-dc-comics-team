@extends('layouts.mainLayout')

@section('page_content')

<div class="container">
    <h2>Nuovo articolo</h2>
    
    <form action="{{ route('comics.store') }}" method="POST" class="mt-5 mx-auto w-75">
        @csrf

        <div class="row mb-3">
            <label for="title" class="col-2 col-form-label fw-bold">Titolo*</label>
            <div class="col-10">
                <input
                    type="text"
                    class="form-control @error ('title') is-invalid @enderror"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
                    required
                    maxlength="128"
                    placeholder="Inserisci il titolo..."
                >
                @error('title')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="thumb" class="col-2 col-form-label fw-bold">Immagine</label>
            <div class="col-10">
                <input
                    type="text"
                    class="form-control @error ('thumb') is-invalid @enderror"
                    id="thumb"
                    name="thumb"
                    value="{{ old('thumb') }}"
                    maxlength="256"
                    placeholder="Inserisci il link..."
                >
                @error('thumb')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="description" class="col-2 col-form-label fw-bold">Descrizione</label>
            <div class="col-10">
                <textarea
                    id="description"
                    class="form-control @error ('description') is-invalid @enderror"
                    name="description"
                    rows="6"
                    placeholder="Inserisci una descrizione..."
                >{{ old('description') }}</textarea>
                @error('description')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="price" class="col-2 col-form-label fw-bold">Prezzo (€)*</label>
            <div class="col-10">
                <input
                    type=number
                    class="form-control @error ('price') is-invalid @enderror"
                    step=0.01
                    id="price"
                    name="price"
                    value="{{ old('price') }}"
                    required
                    min="0.01"
                    placeholder="0,00"
                >
                @error('price')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="series" class="col-2 col-form-label fw-bold">Serie*</label>
            <div class="col-10">
                <input
                    type="text"
                    class="form-control @error ('series') is-invalid @enderror"
                    id="series"
                    name="series"
                    value="{{ old('series') }}"
                    required
                    maxlength="255"
                    placeholder="Inserisci il nome della serie..."
                >
                @error('series')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="sale_date" class="col-2 col-form-label fw-bold">Data di uscita*</label>
            <div class="col-10">
                <input
                    type="date"
                    class="form-control @error ('sale_date') is-invalid @enderror"
                    id="sale_date"
                    name="sale_date"
                    value="{{ old('sale_date') }}"
                    required
                >
                @error('sale_date')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="type" class="col-2 col-form-label fw-bold">Tipologia*</label>
            <div class="col-10">
                <select
                    id="type"
                    class="form-select @error ('sale_date') is-invalid @enderror"
                    name="type"
                    required
                >
                    <option {{ (old('type')) ? 'selected' : '' }} selected disabled>Seleziona una tipologia</option>
                    <option {{ (old('type') == 'comic book') ? 'selected' : '' }} value="comic book">Comic book</option>
                    <option {{ (old('type') == 'graphic novel') ? 'selected' : '' }} value="graphic novel">Graphic novel</option>
                </select>
                @error('type')
                    <span class="d-block mt-2 text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="mt-5 text-end">
            <a
                href="{{ route('comics.index') }}"
                class="btn btn-warning text-light"
            >
                <i class="fa-solid fa-rotate-left"></i> 
            </a>
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-check"></i>
            </button>
        </div>
    </form>
</div>
    
@endsection