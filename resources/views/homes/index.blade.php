@extends('layouts.layout')
{{-- @section('title', 'Markedia - Форум :: Home') --}}
@section('content')


<div class="container">
    <div class="banner">
        <div id="wrapper">
            <script src="/public/assets/user/js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function() {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        before: function() {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function() {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });
            </script>
            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                        <div class="slider-top">
                            <a href="#"><img src="/public/assets/user/images/banner.jpg" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="slider-top">
                            <a href="#"><img src="/public/assets/user/images/banner1.jpg" alt="" /></a>
                        </div>
                    </li>
                    <li>
                        <div class="slider-top">
                            <a href="#"><img src="/public/assets/user/images/banner2.jpg" alt="" /></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-cont index-main">
        <div class="main">
            <div class="wrap">
                <div class="content-top">
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="single.html">
                            <img src="/public/assets/user/images/pic.jpg" alt="" />
                            <div class="banner_content">
                                <h2>Lorem<span>ipsum</span></h2>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.<i
                                        class="icon-chevron-sign-right"></i></p>
                            </div>
                        </a>
                        <div class="icon-right"><a href="#"><img src="/public/assets/user/images/marker1.png"
                                    alt="" /></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="single.html">
                            <img src="/public/assets/user/images/pic1.jpg" alt="" />
                            <div class="banner_content">
                                <h2>Lorem<span>ipsum</span></h2>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.<i
                                        class="icon-chevron-sign-right"></i></p>
                            </div>
                        </a>
                        <div class="icon-right"><a href="#"><img src="/public/assets/user/images/marker1.png"
                                    alt="" /></a></div>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="single.html">
                            <img src="/public/assets/user/images/pic2.jpg" alt="" />
                            <div class="banner_content">
                                <h2>Lorem<span>ipsum</span></h2>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.<i
                                        class="icon-chevron-sign-right"></i></p>
                            </div>
                        </a>
                        <div class="icon-right"><a href="#"><img src="/public/assets/user/images/marker1.png"
                                    alt="" /></a></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row">
                    <div class="col">
                <div class="section group d-flex">
                    
                    <div class="content span_1_of_c">
                        <div class="body">
                            
                                <table class="table table-hover dashboard-task-infos table-dark">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Исполнитель</th>
                                            <th>Название</th>
                                            <th>Жанр</th>
                                            <th>Аккорды</th>
                                            <th>Караоке</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($songs as $song)
                                            <tr>
                                                <td>{{ $song->id }}</td>
                                                <td>{{ $song->artist->title }}</td>
                                                <td><a href="{{ route('homes.single', ['slug' => $song->slug]) }}" title="">{{ $song->title }}</a></td>
                                                <td>{{ $song->styles->pluck('title')->join(', ') }}</td>
                                                <td><a href="{{ $song->chord }}"><img src="/public/assets/user/images/music.png" alt=""></a></td>
                                                <td><a href="{{ $song->video }}"><img src="/public/assets/user/images/Youtube.png" alt=""></a></td>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
    @endsection
