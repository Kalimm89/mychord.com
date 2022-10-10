@extends('admin.layouts.layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Песни</h2>
            </div>
        </div>
        <form role="form" method="post" action="{{ route('songs.store') }}" enctype="multipart/form-data">
            @csrf
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">

                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-3">

                            <div class="form-group">
                                <label class="artist_id">Исполнитель</label>
                                <select class="form-control @error('artist_id') is-invalid @enderror" id="artist_id"
                                    name="artist_id">
                                    @foreach ($artists as $k => $v)
                                        <option value="{{ $k }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Название песни</label>
                                <textarea class="form-control @error('title') is-invalid @enderror" placeholder="Введите название ..." name="title"
                                    id="title" cols="" rows=""></textarea>
                            </div>

                            {{-- <div class="form-group">
                                <label for="content">Контент</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" placeholder="Контент ..." name="content" id="content" rows="15" rows="15"></textarea>
                            </div> --}}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="url" class="form-control @error('content') is-invalid @enderror" placeholder="Ссылка на аккорды" name="chord" required="" id="chord" aria-required="true">
                                    {{-- <label class="form-control">Ссылка на аккорды</label> --}}
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="url" class="form-control @error('content') is-invalid @enderror" placeholder="Ссылка на видео" name="video" required="" id="video" aria-required="true">
                                    {{-- <label class="form-control">Ссылка на видео</label> --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="styles">Стили</label>
                                <select name="styles[]" class="select2" id="styles" multiple="multiple" data-placeholder="Выбор стилей" style="width: 100%;">
                                @foreach($styles as $k => $v)
                                <option value="{{ $k }}">{{ $v }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
            </div>
        </div>
        </form>
    </section>
@endsection
