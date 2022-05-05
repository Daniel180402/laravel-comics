@extends('layout.app')

@section('content')
    <div class="my-container">
        <div class="comic-container">
            <div class="single-comic">
                <h1>{{ $comic['title'] }}</h1>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
        </div>
    </div>
    @dump($comic)
@endsection