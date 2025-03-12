@extends('layouts.fronted')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @section('status')
            <div class="alert alert-success">
                {{ session('status') }}
            </div>

            @endsection

            <div class="card">
                <div class="card-header">
                    <h4>Products List
                        <a href="{{ url('products/create') }}" class="btn btn-primary float-end">Add Product</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-stiped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Stocks</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->stock}}</td>
                                <td>
                                    <a href="{{ route('products.edit',$product->id) }}" class="btn btn-success">edit</a>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>

                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


