@extends('layouts.app')
@section('content')

<div class="card">
        <div class="card-header">
            <h2>
                 Practice projects
                <a class="btn btn-primary float-end" href="{{ route('product.create') }}"> Create New Product</a>
            </h2>
        </div>

        <div class="card-header">
        	@if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
            	<tr>
            		<th>No</th>
            		<th>Name</th>
            		<th>Image</th>
            		<th>Price</th>
            		<th width="280px">Action</th>
            	</tr>

            	@foreach($product as $item)
            	<tr>
                    
            		<td>{{$item->id}}</td>
            		<td>{{$item->name}}</td>
            		<td><img src="{{asset('uploads/products/'.$item->image)}}" height="70px" width="70px"></td>
            		<td>{{$item->price}}</td>

            		<td>
            			<a class ="btn btn-info" href="{{route('product.show',$item->id)}}">Show</a>
            			<a class ="btn btn-primary" href="{{route('product.edit',$item->id)}}">Edit</a>
            			<form action="{{route('product.delete',$item->id)}}" method="post" class="d-inline">
            				@csrf
            				@method('DELETE')
            				<button type="submit" class="btn btn-danger">Delete</button>
            			</form>
            		</td>
                    
            	</tr>
            	@endforeach
            </table>
        </div>
    </div>
    @endsection

    <!--return view te only folder name hbe-->