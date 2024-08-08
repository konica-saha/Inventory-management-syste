@extends('products.layouts')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>
                Show Product
                <a class="btn btn-danger float-end" href="{{ route('product.index') }}"> Back</a>
            </h2>
        </div>
        <div class="card-body">

        		<div class="row">
        			<div class="col-md-12 col-12">
        				<div class="mb-3">
        					<label>Name</label>
        					<p>{{$product->name}}</p>
        					
        				</div>
        			</div>
        			<div class="col-md-12 col-12">
        				<div class="mb-3">
        					<label>Image</label>
        					<p><img src="{{asset('uploads/products/'.$product->image)}}" height="100px" width="100px"></p>
        				</div>
        			</div>
        			<div class="col-md-12 col-12">
        				<div class="mb-3">
        					<label>Price</label>
        					<p>{{$product->price}}</p>
        					
        				</div>
        			</div>
        		</div>
                	
        </div>
    </div>

@endsection
