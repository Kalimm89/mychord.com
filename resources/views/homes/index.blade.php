@extends('layouts.layout')
{{-- @section('title', 'Markedia - Форум :: Home') --}}
@section('header')



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
                <div class="section group">
                    {{-- <div class="leftsidebar span_3_of_1">
					<div class="posts">
					 <div class="date">
								<figure><span>23</span>March</figure>
						</div>
								<div class="post_desc">
									<p>Lorem ipsum dolor sit amet consec tetuer adipiscing elit Praesent.</p>
							</div>
						 <div class="clear"></div>	
					</div>
					<div class="posts">
					 <div class="date">
								<figure><span>23</span>March</figure>
						</div>
								<div class="post_desc">
									<p>Lorem ipsum dolor sit amet consec tetuer adipiscing elit Praesent vestibulum molestie.</p>
							</div>
						 <div class="clear"></div>	
					</div>
					<div class="posts">
					 <div class="date">
								<figure><span>23</span>March</figure>
						</div>
								<div class="post_desc">
									<p>Lorem ipsum dolor sit amet consec tetuer adipiscing elit Praesent.</p>
							</div>
						 <div class="clear"></div>	
					</div>
					<div class="posts">
					 <div class="date">
								<figure><span>23</span>March</figure>
						</div>
								<div class="post_desc">
									<p>Lorem ipsum dolor sit amet consec tetuer adipiscing elit Praesent.</p>
							</div>
						 <div class="clear"></div>	
					</div>
 				</div>	 --}}
                    <div class="content span_1_of_c">
                        <div class="body">
                            <div class="table-responsive">
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
                                    {{-- <tbody>
                                        @foreach ($songs as $song)
                                            <tr>
                                                <td>{{ $song->id }}</td>
                                                <td>{{ $song->artist->title }}</td>
                                                <td>{{ $song->title }}</td>
                                                <td>{{ $song->styles->pluck('title')->join(', ') }}</td>
                                                <td>{{ $song->chord }}</td>
                                                <td>{{ $song->video }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody> --}}
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    
    @endsection
