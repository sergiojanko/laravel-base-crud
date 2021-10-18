@extends('layouts.main')

@section('title', 'DC Comics | Comics')

@section('content')
    <section id="comic">
        <figure>
            <img src="{{$comic['thumb']}}" alt="">
            <figcaption>{{$comic['title']}}</figcaption>
        </figure>
        <form method="POST" action="">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">ELIMINA</button>
        </form>
        <a href="{{ route('comics.edit', $comic['id']-1) }}" class="btn btn-primary">MODIFICA</a>
    </section>
@endsection
