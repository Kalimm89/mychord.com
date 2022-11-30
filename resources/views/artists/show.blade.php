@extends('layouts.layout')
{{-- @section('title', 'Markedia - Форум :: ' . $post->title) --}}
@section('content')

{{-- <div class="page-wrapper p-5">
                            <div class="blog-title-area">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">{{ $artist->title }}</a></li>
                                    
                                </ol>

                                <div class="d-flex m-2 p-2">
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
                                        
                                            <tr>
                                                @foreach ($songs as $song)
                                                <td>{{ $song->id }}</td>
                                                <td><a href="{{ route('artists.single', ['slug' => $artist->slug]) }}" title="">{{ $artist->title }}</a></td>
                                                <td><a href="{{ route('homes.single', ['slug' => $song->slug]) }}" title="">{{ $song->title }}</a></td>
                                                <td>{{ $song->styles->pluck('title')->join(', ') }}</td>
                                                <td><a href="{{ $song->chord }}"><img src="/public/assets/user/images/music.png" alt=""></a></td>
                                                <td><a href="{{ $song->video }}"><img src="/public/assets/user/images/Youtube.png" alt=""></a></td>
                                                @endforeach
                                            </tr>
                                       
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>


                                
                            </div>

                            
</div> --}}
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