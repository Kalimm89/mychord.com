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
                                    <span>Appetizers</span>
                                    <h2><a href="details.html">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="/public/assets/img/trending/trending_bottom1.jpg" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">Lifestyple</span>
                                        <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="/public/assets/img/trending/trending_bottom2.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color2">Sports</span>
                                            <h4><h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="/public/assets/img/trending/trending_bottom3.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Travels</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    
                    <div class="col-lg-4">
                        @foreach ($songs as $song)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ $song->artist->getImage() }}" alt="" width="100">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{ $song->artist->title }}</span>
                                <h4><a href="details.html">{{ $song->title }}</a></h4>
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
   