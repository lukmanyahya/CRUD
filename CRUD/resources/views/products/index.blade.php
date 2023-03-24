@extends('layouts.app')

@section('title', 'Products')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>MY PRODUCT</h1>
        </div>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
        
    </div>

    <table class="table" border="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-secondary">Show</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection