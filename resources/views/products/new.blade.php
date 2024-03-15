@extends('layouts.app')
@section('p_title', 'Products')
@section('main')

<div class="container mt-3">
  <h2 class="display-1 text-center pb-5 text-success">New Product</h2>     
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <ul class= "text-center h6">{{ $error }}</ul>
            @endforeach
        </ul>
    </div>
  @endif    
    <div class="row">
        <form action="/product_store" method="POST">
            @csrf
            <label for="">First Name</label>
            <input type="text" name="f_name" class="form-control" value="{{ old('first_name') }}"/>
            <label for="">Last Name</label>
            <input type="text" name="l_name" class="form-control" value="{{ old('last_name') }}"/>
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}"/>
            <button class="btn btn-outline-success mt-4" type="submit">Create</button>
        </form>
    </div>
</div>

@endsection
