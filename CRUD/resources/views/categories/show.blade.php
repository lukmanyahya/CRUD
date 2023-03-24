@extends('layouts.app')

@section('title', 'Show Category')

@section('content')
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Show Category</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
            </form>
        </div>
    </div>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $category->name }}</td>
            </tr>
        </tbody>
    </table>
@endsection