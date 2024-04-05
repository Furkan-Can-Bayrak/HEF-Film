@extends('front.layouts.app')

@section('content')

    <main>
        <div class="container">
            <div class="row mt-2">
                @foreach($movies as $movie)
                    <div class="col-md-4"><a href="{{route('films.show', $movie->id)}}">
                            <div class="movie">
                                <img src="{{ $movie->photo }}" class="img-fluid" alt="{{ $movie->name }} resmi">
                                <p style="color: black">{{ $movie->name }}</p>
                            </div></a>
                    </div>
                @endforeach
                {{$movies->links()}}
            </div>
        </div>
    </main>
@endsection

