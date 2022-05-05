@extends('layout.app')

@section('content')
<div class="comics-wrapper">
    <div class="my-container">
        <div class="comic-container">
            @foreach ($comics as $index => $comic)
                <div class="comic-element">
                    <img src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
                    <a href="{{ route("comic-detail", ['id' => $index]) }}"><h5>{{ $comic["title"] }}</h5></a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection