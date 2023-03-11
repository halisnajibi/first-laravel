@extends('layouts.main')
@section('container')
<ol class="list-group list-group-numbered">
    @foreach ($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">
            <a href="category/{{ $category->slug }}"> {{ $category->name }}</a>        
        </div>
      </div>
      <span class="badge bg-primary rounded-pill">{{ $category->posts_count }}</span>
    </li>
    @endforeach

  </ol>
@endsection