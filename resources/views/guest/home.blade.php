@extends('layout.app')

@section('content')
    <div class="my-container">
        <div class="comic-container">
            @foreach ($comics as $comic)
                <div class="comic-element">
                    <img src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
                    <h4>{{ $comic["title"] }}</h4>
                </div>
            @endforeach
        </div>
    </div>
@endsection