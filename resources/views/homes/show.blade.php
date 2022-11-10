@extends('layouts.layout')
{{-- @section('title', 'Markedia - Форум :: ' . $post->title) --}}
@section('content')

<div class="page-wrapper">
                            <div class="blog-title-area">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">{{ $song->artist->title }}</a></li>
                                    <li class="breadcrumb-item active">{{ $song->title }}</li>
                                </ol>

                                

                                <h3>{{ $song->title }}</h3>

                                <div class="blog-meta big-meta">
                                    {{-- <small>{{ $post->getPostDate() }}</small> --}}
                                    
                                    <small><i class="fa fa-eye"></i> {{ $song->views }}</small>
                                </div><!-- end meta -->

                                
                            </div><!-- end title -->

                            

                            <div class="blog-content">  
                               
                                {!! $song->chord !!}
                                {!! $song->video !!}
                                
                            </div><!-- end content -->

                            {{-- <div class="blog-title-area">
                                @if($post->tags->count())
                                <div class="tag-cloud-single">
                                    <span>Tags</span>
                                    @foreach($post->tags as $tag)
                                    <small><a href="{{ route('tags.single', ['slug' => $tag->slug]) }}" title="">{{ $tag->title }}</a></small>
                                    @endforeach
                                </div><!-- end meta -->
                                @endif
                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title --> --}}


@endsection