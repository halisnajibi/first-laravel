
@extends('layouts.dashboard')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Category</h1>
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
          <th scope="col">Category</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)       
        <tr>
            <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection