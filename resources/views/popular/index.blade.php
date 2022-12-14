@extends('layouts.layout')
{{-- @section('title', 'Markedia - Форум :: Home') --}}
@section('content')
       


    <main>
    <!-- Trending Area Start -->
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
        <div class="whats-news-caption">
            <div class="row mx-auto">
                @foreach ($songs as $song)
                <div class="col-lg-3 col-md-3 text-center m-2 border border-white p-5">
                    <div class="single-what-news">
                        <div class="what-img">
                            
                            <img src="{{ $song->artist->getImage() }}" alt="" width="100">
                        </div>
                        <div class="what-cap">
                            <span class="color1"><a href="{{ route('artists.single', ['slug' => $song->artist->slug]) }}" title="">{{ $song->artist->title }}</a></span>
                            <h4><a href="{{ route('homes.single', ['slug' => $song->slug]) }}" title="">{{ $song->title }}</a></h4>
                            <a href="{{ $song->chord }}"><img src="/public/assets/user/images/music.png" alt=""></a>
                            <a href="{{ $song->video }}"><img src="/public/assets/user/images/Youtube.png" alt=""></a>
                            <h5><i class="fa fa-eye"></i>{{ $song->views }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <hr class="invis">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                {{ $songs->links() }}
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->

    </main>
    @endsection
   