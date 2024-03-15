@extends('layouts.app')
@section('p_title', 'Categories')

@section('main')

<div class="container mt-3 p-5">
  <h2 class="display-1 text-center pb-5">Categories <a class="btn btn-info" href="/category-create">New Category</a></h2>       
  @if(session()->has('success'))
  <div class="alert alert-info" role="alert">
    <strong>{{ session()->get('success') }}</strong>
  </div>
  @endif
  <table class="table">
    <thead>
      <tr>
        <th>SI No</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $category->title }}</td>
        <td class="d-flex">
            <a href="/category-edit/{{$category->id}}" class="btn btn-info">Edit</a>
            <!-- <a href="/category-delete/{{$category->id}}" class="btn btn-danger">Delete</a> -->
            <form action="/category-delete/{{$category->id}}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger ms-2">Delete</button>
            </form>
            <!-- <button class="btn btn-danger">Delete</button> -->
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $categories->links() }}
</div>

@endsection