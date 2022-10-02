@extends('admin.layouts.layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Песни</h2>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Песни
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">

                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">


                                <div class="row">
                                    <div class="col-sm-12">
                                        <table
                                            class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                            id="DataTables_Table_0" role="grid"
                                            aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 30px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="width: 330px;">Исполнитель</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 182px;">Название песни</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 182px;">Стиль</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 182px;">Текст/Аккорды/Караоке</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Age: activate to sort column ascending"
                                                        style="width: 100px;">#</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($songs as $song)
                                                    <tr>
                                                        <td>{{ $song->id }}</td>
                                                        <td>{{ $song->artist->title }}</td>
                                                        <td>{{ $song->title }}</td>
                                                        <td>{{ $song->styles->pluck('title')->join(', ') }}</td>
                                                        <td>{{ $song->content }}</td>
                                                        <td>
                                                            <a href="{{ route('songs.edit', $song->id) }}"
                                                                class="btn btn-info btn-sm float-left mr-1">
                                                                <i class="material-icons">create</i>
                                                            </a>
                                                            <form action="{{ route('songs.destroy', $song->id) }}"
                                                                method="post" class="float-left">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Подтвердите удаление')">
                                                                    <i class="material-icons">delete</i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <a href="{{ route('songs.create') }}" class="btn btn-primary mb-5">Добавить
                                            песню</a>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-7">

                                        {{-- <div class="dataTables_paginate paging_simple_numbers"
                                            id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled"
                                                    id="DataTables_Table_0_previous">
                                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0"
                                                        tabindex="0">Previous</a>
                                                </li>
                                                <li class="paginate_button active">
                                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1"
                                                        tabindex="0">1</a>
                                                </li>

                                                <li class="paginate_button next" id="DataTables_Table_0_next">
                                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7"
                                                        tabindex="0">Next</a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{ $songs->links() }}
        </div>
        </div>
    </section>
@endsection
