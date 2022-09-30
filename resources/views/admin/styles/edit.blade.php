@extends('admin.layouts.layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Стили</h2>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Стиль: "{{ $style->title }}"</h2>

                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" role="form" method="post"
                            action="{{ route('styles.update', ['style' => $style->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        placeholder="Название" value="{{ $style->title }}">
                                    {{-- <label for="title">Название</label> --}}
                                </div>

                            </div>

                            <button class="btn btn-primary waves-effect" type="submit">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
