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
                        <h2>Введите имя исполнителя</h2>

                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" role="form" method="post"
                            action="{{ route('artists.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" id="title"
                                        placeholder="Название">
                                    {{-- <label for="title">Название</label> --}}
                                </div>
                                

                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Изображение</label>
                                
                                <input type="file" name="thumbnail" id="thumbnail">
                                
                                
                                </div>
                            <input class="btn btn-primary waves-effect" type="submit">
                        </form>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
