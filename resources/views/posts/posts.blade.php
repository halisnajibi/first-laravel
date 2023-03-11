@extends('layouts.main')
@section('container')
    <div class="row">
        <form class="d-flex mb-3" role="search" method="get" action="">
            <input class="form-control" type="search" placeholder="Search" name="search" value="{{ request('search') }}">
            <select class="form-select ms-2 me-2" aria-label="Default select example" name="kategori">
                <option value="">Semua</option>
                @foreach ($categories as $category)
                    @if (request('kategori') == $category->name)
                        <option value="{{ $category->name }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            <button class="btn btn-danger type="submit">Search</button>
        </form>
        @if ($posts->count())
            <div class="card mb-3">
                @if ($posts[0]->image)
          <img src="{{ asset('storage/'. $posts[0]->image ) }}" alt="">
          @else
          <img src="https://source.unsplash.com/1400x400?{{ $post->category->name }}" class="card-img-top img-fluid"
              alt="...">
          @endif
                <div class="card-body text-center">
                    <h3 class="card-title">
                        <a href="/post/{{ $posts[0]->slug }}"
                            class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
                    </h3>
                    <small class="text-muted">
                        <p>by. <a href="author/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> -
                            {{ $posts[0]->category->name }}</p> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/post/{{ $posts[0]->slug }}" class="btn btn-primary">Red More</a>
                </div>
            </div>
        @else
            <h3 class="text-center">Kosong</h3>
        @endif
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
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
        <div class="my-3">
            {{ $posts->links() }}</div>
    </div>
@endsection
