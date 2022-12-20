@extends('layouts.app')

@section('main-content')
<section>
    <div id="current-series" class="container m-auto row p-5 position-relative">
        @foreach($comics as $comic)
                <a class="cover-wrapper col-12 col-sm-6 col-md-3 col-lg-2" href="{{ route('comics.show', $comic->id) }}">
                    <div class="cover position-relative">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        <div class='comic-info position-absolute w-100 h-100 top-0'>
                            <div class="position-absolute bottom-0 end-0">
                                <span class="price d-block">{{$comic['price']}}</span>
                                <span class="type d-block text-uppercase">{{$comic['type']}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-uppercase py-3 px-2">
                        {{$comic['series']}}
                    </div>
                </a>
        @endforeach
        <div class="banner position-absolute top-0 text-uppercase fs-4 py-1 px-4">
            Current series
        </div>
    </div>
    <div class="p-4">
        <button class="d-block m-auto text-uppercase py-1 px-5 fs-6 fw-bolder">load more</button>
    </div>
</section>
@endsection
