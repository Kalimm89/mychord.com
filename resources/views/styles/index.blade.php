@extends('layouts.layout')
{{-- @section('title', 'Markedia - Форум :: Home') --}}
@section('content')
       

<div class="col">
    <table class="table table-bordered border-primary">
        <thead>
          <tr>
            <th>Id</th>
            <th>Жанр</th>
          </tr>
        </thead>
        <tbody>
            @foreach($styles as $style)
          <tr>
    
            
                    <td scope="row">{{ $style->id }}</td>
                    
                    <td><a href="{{ route('styles.single', ['slug' => $style->slug]) }}" title="" class="bg-primary">{{ $style->title }}</a></td>
                   
    
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

    @endsection
   