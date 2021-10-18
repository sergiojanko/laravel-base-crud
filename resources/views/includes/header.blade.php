<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{asset('images/dc-logo.png')}}" alt="DC" class="logo">
            </div>
            <div class="col">
                <ul>
                    <li>
                        <a href="{{url('/')}}">HOME</a>
                        <a href="#">CHARACTER</a>
                        <a href="{{ route('comics.index')}}">COMICS</a>
                        <a href="#">MOVIES</a>
                        <a href="{{ route('comics.create')}}">ADD COMIC</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>