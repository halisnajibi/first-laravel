
@extends('layouts.main')
@section('container')
<div class="container">
  <div class="row">
      @foreach ($posts as $post)
          <div class="col-md-4 mb-2">
              <div class="card">
                <div class="position-absolute bg-dark p-2 text-white ">{{ $post->category->name }}</div>
                  <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top"
                      alt="{{ $post->category->name }}">
                  <div class="card-body">
                      <small class="text-muted">
                          <p>by. <a href="author/{{ $post->user->username }}">{{ $posts[0]->user->name }}</a>
                              {{ $posts[0]->created_at->diffForHumans() }}
                      </small>
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Red More</a>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div>
@endsection