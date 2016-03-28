@extends('layouts.app', ['page_title' => 'Category test'])

@section('content')
    <div class="page-header">
        <h2>{{ $category->name }}</h2>
    </div>
    <p>{{ $category->description }}</p>

    @if(auth()->check() && auth()->user()->role === 'admin')
        <div class="panel panel-default">
            <div class="panel-heading">Admin Tools</div>
            <div class="panel-body">

                <div class="btn-group" role="group" aria-label="...">
                    <a class="btn btn-default" href="{{ URL::action('Manage\ProductController@create_in_category', $category->slug) }}">Add Product</a>
                    <a class="btn btn-default" href="{{ URL::action('Manage\CategoryController@edit', $category->id) }}">Edit Category</a>
                </div>

            </div>
        </div>
    @endif

    @if(!is_null($category->children))
        @if(count($category->children()->get()) > 0)
        <h3>Sub Categories</h3>

        <div class="list-group">
            @foreach($category->children as $child)
                <a class="list-group-item"
                   href="{{URL::action('Manage\CategoryController@show', $child->slug)}}" >
                    <h4 class="list-group-item-heading">{{$child->name}}</h4>
                    <p class="list-group-item-text">{{$child->description}}</p>
                </a>
            @endforeach
        </div>
        @endif
    @endif

    @if($products->count() > 0)

    <h3>Products</h3>

    <div class="list-group">
        @foreach($products as $product)
            <a class="list-group-item"
               href="{{URL::action('Manage\ProductController@show', $product->slug)}}">
                <span class="badge">€{{ $product->price }}</span>
                <h4 class="list-group-item-heading">{{$product->name}}</h4>
                <p class="list-group-item-text">{{ $product->description_short }}</p>
            </a>
        @endforeach
    </div>
    @else
    <div class="alert alert-info">
        Geen producten gevonden.
    </div>
    @endif
@endsection