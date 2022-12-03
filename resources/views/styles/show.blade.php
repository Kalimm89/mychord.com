@extends('layouts.layout')
{{-- @section('title', 'Markedia - Форум :: ' . $post->title) --}}
@section('content')

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
  <div class="whats-news-caption">
      <div class="row">
          @foreach ($songs as $song)
          <div class="col-lg-6 col-md-6 text-center mt-5">
              <div class="single-what-news mb-100">
                  <div class="what-img">
                      <img src="{{ $song->artist->getImage() }}" alt="" width="100">
                  </div>
                  <div class="what-cap">
                      <span class="color1"><a href="{{ route('artists.single', ['slug' => $song->artist->slug]) }}" title="">{{ $song->artist->title }}</a></span>
                      <h4><a href="{{ route('homes.single', ['slug' => $song->slug]) }}" title="">{{ $song->title }}</a></h4>
                      <a href="{{ $song->chord }}"><img src="/public/assets/user/images/music.png" alt=""></a>
                      <a href="{{ $song->video }}"><img src="/public/assets/user/images/Youtube.png" alt=""></a>

                  </div>
              </div>
          </div>
          @endforeach
  </div>
</div>

@endsection