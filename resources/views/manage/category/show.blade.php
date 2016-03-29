@extends('layouts.arrow_page', ['page_title' => $category->name])


    {{--<div class="page-header">--}}
        {{--<h2>{{ $category->name }}</h2>--}}
    {{--</div>--}}
    <p class="lead">{{ $category->description }}</p>

    @if(auth()->check() && auth()->user()->role === 'admin')
        <div class="panel panel-default">
            <div class="panel-heading">Actions</div>
            <div class="panel-body">

                <div class="btn-group" role="group">
                    <a class="btn btn-default"
                       href="{{ URL::action('Manage\ProductController@create_in_category', $category->slug) }}">Add
                        Product</a>
                    <a class="btn btn-default"
                       href="{{ URL::action('Manage\CategoryController@edit', $category->id) }}">Edit Category</a>
                    <a class="btn btn-default"
                       href="#">Hide Category</a>
                </div>

            </div>
        </div>
    @endif


    <div class="panel panel-default">
        <div class="panel-heading">Sub categories</div>
        <div class="panel-body">
            <div class="btn-group" role="group">
                <a class="btn btn-default"
                   href="{{ URL::action('Manage\CategoryController@create_in_category', $category->slug) }}">Add Sub
                    category</a>
            </div>
        </div>
        @if(!is_null($category->children))
            @if(count($category->children()->get()) > 0)
                <div class="list-group">
                    @foreach($category->children as $child)
                        @include('manage.category.partials._categoryListItem', ['cat_item' => $child])
                    @endforeach
                </div>
            @endif
        @endif
    </div>


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