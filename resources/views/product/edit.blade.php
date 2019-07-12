@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('product.update',$product->id) }}" method="POST">
				@csrf
				@method('PUT')
			  <div class="form-group">
			    <label for="exampleInputEmail1">Product Name</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->name }}" name="name" placeholder="Enter your product name">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Product Description</label>
			    <textarea name="desc" class="form-control">{{ $product->desc }}</textarea>
			  </div>
			   <div class="form-group">
			    <label for="exampleInputEmail1">Product Price</label>
			    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->price }}" name="price" placeholder="Enter your product price">
			  </div>
			   <div class="form-group">
			    <label for="exampleInputEmail1">Product quantity</label>
			    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $product->quantity }}" name="quantity" placeholder="Enter your product quantity">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
	
@endsection