@extends('layouts.app')

@section('title', 'Create Cart')

@section('content')
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Create Cart</h1>
        </div>
    </div>

    <form action="{{ route('cart.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection