@extends('layouts.master')
@section('title','index')
@section('content')
<h1>Category</h1>
    <a href class="btn btn-primary">+</a>
<table border = "10">
<tr>
    <th>Nama</th>
    <th>Deskripsi</th>
</tr>
@foreach ($modelcategories as $category)
<tr>
    <td>{{$category->name}}</td>
    <td>{{$category->description}}</td>
</tr>
@endforeach
</table>
<marquee><font size ="100" color="blue">Lukman Yahya Saputra</marquee>
<marquee direction="right"><font size ="100" color="red">Lukman Yahya Saputra</marquee>
