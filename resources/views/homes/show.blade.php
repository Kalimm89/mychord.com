@extends('layouts.layout')
{{-- @section('title', 'Markedia - Форум :: ' . $post->title) --}}
@section('content')

<div class="page-wrapper p-5">
                            <div class="blog-title-area">
                                <ol class="breadcrumb hidden-xs-down">
                                    {{-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li> --}}
                                    <li class="breadcrumb-item"><a href="{{ route('artists.single', ['slug' => $song->artist->slug]) }}">{{ $song->artist->title }}</a></li>
                                    <li class="breadcrumb-item active">{{ $song->title }}</li>
                                </ol>

                                <div class="d-flex m-2 p-2">
                        <div class="body">
                            
                                <table class="table table-hover dashboard-task-infos table-dark">
                                    <thead>
                                        <tr>
                                            {{-- <th>Id</th> --}}
                                            <th>Исполнитель</th>
                                            <th>Название</th>
                                            <th>Жанр</th>
                                            <th>Аккорды</th>
                                            <th>Караоке</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                {{-- <td>{{ $song->id }}</td> --}}
                                                <td><a href="{{ route('artists.single', ['slug' => $song->artist->slug]) }}" title="">{{ $song->artist->title }}</a></td>
                                                <td><a href="{{ route('homes.single', ['slug' => $song->slug]) }}" title="">{{ $song->title }}</a></td>
                                                @if($song->styles->count())
                                                <td>
                                                @foreach($song->styles as $style)
                                                <a href="{{ route('styles.single', ['slug' => $style->slug]) }}" title="" class="bg-primary">{{ $style->title }}</a>
                                                @endforeach
                                            </td>
                                                @endif
                                                
                                                <td><a href="{{ $song->chord }}"><img src="/public/assets/user/images/music.png" alt=""></a></td>
                                                <td><a href="{{ $song->video }}"><img src="/public/assets/user/images/Youtube.png" alt=""></a></td>
                                                
                                            </tr>
                                       
                                    </tbody>
                                </table>
                            
                        </div>
                    </div>


                                
                            </div>

                            
</div>

@endsection