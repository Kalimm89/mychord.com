@extends('admin.layouts.layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Исполнители</h2>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Исполнитель: "{{ $artist->title }}"</h2>

                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" role="form" method="post"
                            action="{{ route('artists.update', ['artist' => $artist->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        placeholder="Название" value="{{ $artist->title }}">
                                    {{-- <label for="title">Название</label> --}}
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Изображение</label>
                                
                                <input type="file" name="thumbnail" id="thumbnail">
                                
                                
                                </div>
                            <div><img src="{{ $artist->getImage() }}" alt="" width="400"></div>
                            <input class="btn btn-primary waves-effect" type="submit">
                        </form>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
