@extends('layouts.fronted')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit products
                        <a href="{{ url('products') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update',$product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}" >
                            @error('name') <span class="text-danger" >{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="descriptions" id="" rows="3" class="form-control">{{ $product->descriptions }}</textarea>
                            <!-- <input type="text" name="name" class="form-control" > -->
                        </div>
                        <div class="mb-3">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}" >
                        </div>
                        <div class="mb-3">
                            <label for="">Stock</label>
                            <input type="text" name="stock" class="form-control" value="{{ $product->stock }}" >
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection