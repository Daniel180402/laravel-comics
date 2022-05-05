@extends('layout.app')

@section('content')
    <div class="single-comic-banner">

    </div>
    <div class="single-comic-wrapper">
        <div class="comic-image-wrapper pb-5">
            <img class="comic-image" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>
        <div class="description-wrapper">
            <div class="comic-description float-start mb-5">
                <h1>{{ $comic['title'] }}</h1>
                <div class="price-section-wrapper d-flex my-3">
                    <div class="price-section d-flex justify-content-space-between">
                        <div class="price d-flex justify-content-start align-items-center ps-4">
                            <span>U.S. Price: <span class="text-white">{{ $comic['price'] }}</span></span>
                        </div>
                        <div class="comic-available d-flex justify-content-end align-items-center pe-4">
                            <span>AVAILABLE</span>
                        </div>
                    </div>
                    <div class="availability-section d-flex justify-content-center align-items-center">
                        <span class="text-white">Check Availability</span>
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="advertisement float-start d-flex flex-column align-items-end">
                <h5>ADVERTISEMENT</h5>
                <img src="images/advertisement.jpg" alt="ad">
            </div>
        </div>
    </div>
    @dump($comic)
@endsection