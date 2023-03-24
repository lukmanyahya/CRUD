@extends('layouts.app')

@section('title', 'Show Cart')

@section('content')
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Show Cart</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('carts.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('carts.edit', $carts->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('carts.destroy', $carts->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this ?')">Delete</button>
            </form>
        </div>
    </div>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $cart->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $cart->quantity }}</td>
            </tr>
        </tbody>
    </table>
@endsection