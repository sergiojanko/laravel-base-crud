@extends('layouts.main')

@section('title', 'DC Comics | Create')

@section('content')
    <form method="POST" action="{{ route('comics.update', $comic['id']-1) }}">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" value="{{ $comic['title'] }}" class="form-control" name="title" id="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" value="{{ $comic['description'] }}" class="form-control" name="description" id="description">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" value="{{ $comic['price'] }}" class="form-control" name="price" id="price">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" value="{{ $comic['thumb'] }}" class="form-control" name="thumb" id="thumb">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" value="{{ $comic['series'] }}" class="form-control" name="series" id="series">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" value="{{ $comic['type'] }}" class="form-control" name="type" id="type">
        </div>
        <div class="mb-3">
            <label for="sale-date" class="form-label">Sale Date</label>
            <input type="date" value="{{ $comic['sale_date'] }}" class="form-control" name="sale-date" id="sale-date">
        </div>
        <button type="submit" class="btn btn-primary">SALVA</button>
    </form>
@endsection