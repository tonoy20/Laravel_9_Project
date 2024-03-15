@extends('layouts.app')
@section('p_title', 'Products')
@section('main')

<div class="container mt-3">
  <h2 class="display-1 text-center pb-5 text-success">Products <a href="/product_create" class="btn btn-primary">New Product</a></h2>     
  @if(session()->has('success'))    
  <div class="alert alert-info" role="alert">
  <strong>{{ session()->get('success') }}</strong>
  </div>
  @endif
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
      <tr>
        <td>{{ $product->first_name }}</td>
        <td>{{ $product->last_name }}</td>
        <td>{{ $product->email }}</td>
        <td>
            <a href="/product-edit/{{ $product->id }}" class="btn btn-info">Edit</a>
            <a href="/product-delete/{{ $product->id }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex">
    {{ $products->links() }}
  </div>
</div>

@endsection
