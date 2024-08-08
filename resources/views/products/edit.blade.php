@extends('products.layouts')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>
                Edit Product
                <a class="btn btn-danger float-end" href="{{ route('product.index') }}"> Back</a>
            </h2>
        </div>
        <div class="card-body">

        	
            <form action="{{route('product.update',


            $product->id)}}" method="post" enctype="multipart/form-data"> <!--file jonno enc use hoi-->
                @csrf

                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$product->name}}" >
                            
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" >
                            <img src="{{ asset('uploads/products/'.$product->image) }}" width="70px" height="70px" alt="Image">
                            
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" placeholder="Price" value="{{$product->price}}">
                            
                        </div>
                    </div>
                    <div class="col-md-12 col-12 text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>

@endsection
