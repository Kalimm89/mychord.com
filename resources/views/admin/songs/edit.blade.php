@extends('admin.layouts.layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Песни</h2>
            </div>
        </div>
        <form role="form" method="post" action="{{ route('songs.update', ['song' => $song->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                                    <option value="{{ $k }}" @if($k == $song->artist_id) selected @endif>{{ $v }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Название песни</label>
                                <textarea class="form-control @error('title') is-invalid @enderror" placeholder="Введите название ..." name="title"
                                    id="title" cols="" rows="5">{{ $song->title }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">Контент</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" placeholder="Контент ..." name="content" id="content" rows="5">{{$song->content}}</textarea>
                              </div>
                              <div class="form-group">
                                <label class="styles">Стили</label>
                                <select name="styles[]" class="select2" id="styles" multiple="multiple" data-placeholder="Выбор стилей" style="width: 100%;">
                                @foreach($styles as $k => $v)
                                <option value="{{ $k }}" @if(in_array($k, $song->styles->pluck('id')->all())) selected @endif>{{ $v }}</option>
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
