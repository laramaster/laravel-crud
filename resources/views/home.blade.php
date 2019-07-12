@extends('layouts.app')

@section('content')
<style type="text/css">
    .product-create-button{
        position: absolute;
        top: 6px;
        right: 20px;
    }
    
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products
                    <div class="product-create-button">
                        <a href="{{ route('product.create') }}" class="btn btn-primary">Add product</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Product Name</th>
                          <th scope="col">Product Description</th>
                          <th scope="col">Product Price</th>
                          <th scope="col">Product Quantity</th>
                          <th scope="col">Created At</th>
                           
                           <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($products as $key=>$product)
                        <tr>
                          <th scope="row">{{ $key + 1 }}</th>
                          <td>{{ $product->name }}</td>
                          <td>{{ str_limit($product->desc,50) }}</td>
                          <td>{{ $product->price }}</td>
                          <td>{{ $product->quantity }}</td>
                          <td>{{ $product->created_at }}</td>
                          
                          <td>
                               <a href="{{ route('product.show',$product->id) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>

                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>

                            <a href="{{ route('product.name',$product->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        
                       @endforeach
                      </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
