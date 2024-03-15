@extends('layouts.app')
@section('p_title', 'Categories')
@section('main')

<div class="container mt-3 p-5">
  <h2 class="display-1 text-center pb-5">Edit Category</h2> 
  <div class="row">
    <div class="col-sm-4">
        <form action="/category-update/{{ $category->id }}" method="POST">
            @csrf
            @method('put')
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $category->title }}"/>
            <button class="btn btn-outline-success mt-4" type="submit">Update</button>
        </form>
    </div>
  </div>      
</div>

@endsection