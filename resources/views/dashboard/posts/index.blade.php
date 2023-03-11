
@extends('layouts.dashboard')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
  </div>
  <a href="/dashboard/posts/create" class="btn btn-primary">Create</a>
  @if (session()->has('create'))
  <div class="alert alert-success" role="alert">
  {{session('create')}}
  </div>

  @endif
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)       
        <tr>
            <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge text-bg-primary text-decoration-none">Detail</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge text-bg-warning text-decoration-none">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="badge text-bg-danger text-decoration-none border-0" onclick="return confirm('yakin')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection