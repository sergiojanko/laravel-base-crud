@extends('layouts.main')

@section('title', 'DC Comics | Comics')

@section('content')
    <section id="content-section">
            <ul class="container row">
                @foreach ($comics as $comic)
                <li class="col">
                        <a href="{{ url("/comics/$loop->index") }}">
                            <figure>
                                <img src="{{$comic['thumb']}}" alt="">
                                <figcaption>{{$comic['title']}}</figcaption>
                            </figure>
                        </a>
                        </li>
                    @endforeach
            </ul>
        <div class="row">
            <button>LOAD MORE</button>
        </div>
    </section>
@endsection