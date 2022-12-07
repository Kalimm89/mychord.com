@extends('layouts.layout')
{{-- @section('title', 'Markedia - Форум :: Home') --}}
@section('content')
       


    <main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="/public/assets/img/trending/trending_top.jpg" alt="">
                                <div class="trend-top-cap">
                                    
                                    <h1><a href="{{ route('popular') }}">Каталог популярных песен</a></h1>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Riht content -->
                    
                    <div class="col-lg-4">
                        @foreach ($popular_songs as $song)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ $song->artist->getImage() }}" alt="" width="100">
                                <span>{{ $song->count() }}</span>
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1"><a href="{{ route('artists.single', ['slug' => $song->artist->slug]) }}" title="">{{ $song->artist->title }}</a></span>
                                <h4><a href="{{ route('homes.single', ['slug' => $song->slug]) }}" title="">{{ $song->title }}</a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>
    @endsection
   