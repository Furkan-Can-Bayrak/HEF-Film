@extends('front.layouts.app')




@section('content')


    <img src="https://www.shutterstock.com/shutterstock/videos/1084465417/thumb/11.jpg?ip=x480" alt="foto" class="mt-4" style="width:1200px;height:400px;">

    <h2 class="mt-3">{{$movie->name}}</h2>

    <p>{{$movie->summary}}</p>

    @if(\Illuminate\Support\Facades\Auth::check())
      @if(\Illuminate\Support\Facades\Auth::user()->films->contains($movie->id))
          <form method="post" action="">
              @csrf
              <input type="hidden" name="movie" value="{{$movie->id}}">
              <button class="btn btn-warning"> Favorilerden Çıkar </button>
          </form>
      @else
    <form method="post" action="{{route('addFavourite')}}">
        @csrf
        <input type="hidden" name="movie" value="{{$movie->id}}">
        <button class="btn btn-warning"> Favoriye Ekle </button>
    </form>


      @endif
    @endif
@endsection
