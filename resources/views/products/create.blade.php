@extends('layouts.fronted')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products List
                        <a href="{{ url('products') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('products') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name') <span class="text-danger" >{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" id="" rows="3" class="form-control"></textarea>
                            <!-- <input type="text" name="name" class="form-control" > -->
                        </div>
                        <div class="mb-3">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control">
                            <!-- @error('name') <span class="text-danger" >{{ $message }}</span> @enderror -->
                        </div>
                        <div class="mb-3">
                            <label for="">Stock</label>
                            <input type="text" name="stock" class="form-control">
                            <!-- @error('name') <span class="text-danger" >{{ $message }}</span> @enderror -->
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