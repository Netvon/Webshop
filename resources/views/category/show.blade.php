@extends('layouts.app', ['page_title' => 'Category test'])

@section('content')
    <h2>{{$category->name}}</h2>
    <h4>{{$category->parent()->first()->name}}</h4>
    <ul>
        @foreach($products as $product)
            <li>{{$product->name}}</li>
        @endforeach
    </ul>
@endsection