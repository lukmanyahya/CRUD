@extends('layouts.app')

@section('title', 'Categories')

@section('content')
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Categories</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
            <a class="btn btn-primary " href="/home" role="button">Home</a>
        
        </div>

    <table class="table" border="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-warning">Show</a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection