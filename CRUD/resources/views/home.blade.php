@extends('layouts.app')

@section('title', 'Home')

@section('content')
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-default" role="navigation">
 <div class="container-fluid">
 <!-- Brand and toggle get grouped for better mobile display -->

 <a class="navbar-brand">Home</a>
 <div class="container mt-5">
        <marquee direction="right"><h1 class="display-4">
             {{ auth()->user()->name }}
        </h1></marquee>
 </div>
    <div class="jumbotron">
        <a class="btn btn-primary" href="/products" 
        role="button">Product</a>
        <a class="btn btn-primary" href="/categories" 
        role="button">Category</a>
        <a class="btn btn-primary" href="/carts" 
        role="button">Cart</a>
    </div>
    <form action="/logout" method="POST">
            @csrf
    <button class="btn btn-danger" href="/">Logout</button>

@endsection