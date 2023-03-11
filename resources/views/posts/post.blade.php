@extends('layouts.main')
@section('container')
<div class="container">
  <div class="row justify-content-center">
 <div class="col-8">
      <div class="card mb-3">
        @if ($post->image)
          <img src="{{ asset('storage/'. $post->image ) }}" alt="">
          @else
          <img src="https://source.unsplash.com/1400x400?{{ $post->category->name }}" class="card-img-top img-fluid"
              alt="...">
          @endif
        <div class="card-body">
            <h3 class="card-title">
                <a href="/post/{{ $post->slug }}"
                    class="text-decoration-none text-dark">{{ $post->title }}</a>
            </h3>
            <small class="text-muted">
                <p>by. <a href="author/{{ $post->user->username }}">{{ $post->user->name }}</a> -
                    {{ $post->category->name }}</p> {{ $post->created_at->diffForHumans() }}
            </small>
           <article>
            {!! $post->body !!}
           </article>
        </div>
    </div>
    </div>
  </div>
</div>
@endsection
