@extends('layouts.main')

@section('title', 'DC Comics | Comics')

@section('content')
    <section id="comic">
        <figure>
            <img src="{{$comic['thumb']}}" alt="">
            <figcaption>{{$comic['title']}}</figcaption>
        </figure>
    </section>
@endsection
