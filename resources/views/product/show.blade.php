@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products View
                   
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="product-name">
                    	<span><h2>Product Name: </h2>{{ $product->name }}</span>
                    </div>
                    <div class="product-name">
                    	<span><h2>Product Description: </h2>{{ $product->desc }}</span>
                    </div>
                    <div class="product-name">
                    	<span><h2>Product Price: </h2>{{ $product->price }}</span>
                    </div>
                    <div class="product-name">
                    	<span><h2>Product Quantity: </h2>{{ $product->quantity }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
@endsection