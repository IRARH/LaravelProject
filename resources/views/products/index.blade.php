@extends('layouts.master')

@section('content')
    <h1>List of products</h1>

    <a class="btn btn-success" href="{{ route('products.create') }}">Create</a>

    @if ($products->isEmpty())
        <div class="alert alert-warning">
            The list of products is empty
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light ">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->status }}</td>
                                <td>
                                    <a class="btn btn-link" href="{{ route('products.show', ['product' => $product->id]) }}">Show</a>
                                    <a class="btn btn-link" href="{{ route('products.edit', ['product' => $product->id]) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach   
                    </tbody>
                </thead>
            </table>
        </div>
    @endif
@endsection