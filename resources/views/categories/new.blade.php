@extends('layouts.app')
@section('p_title', 'Categories')
@section('main')

<div class="container mt-3 p-5">
  <h2 class="display-1 text-center pb-5">New Category</h2> 
  <div class="row">
    <div class="col-sm-4">
        <form action="/category-store" method="POST">
            @csrf
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}"/>
            @if($errors->has('title'))
                <p class="text-danger">{{ $errors->first('title') }}</p>
            @endif
            <button class="btn btn-outline-success mt-4" type="submit">Create</button>
        </form>
    </div>
  </div>      
</div>

@endsection