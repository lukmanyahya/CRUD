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

 <a class="navbar-brand" href="#">Home</a>
 </div>
    <div class="jumbotron">
        <a class="btn btn-primary btn-lg" href="/products" 
        role="button">Browse product</a>
        <a class="btn btn-primary btn-lg" href="/category.index" 
        role="button">Browse Category</a>
    </div>

@endsection