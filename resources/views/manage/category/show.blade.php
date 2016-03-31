@extends('layouts.arrow_page', ['page_title' => $category->name])

@section('page_breadcrumbs')
    @include('manage.partials._breadcrumb')
    <li>{!! Html::linkAction('Manage\CategoryController@index', trans('category.index_title')) !!}</li>
    <li>{{ $category->name }}</li>
@endsection

@section('page_content')
    {{--<div class="page-header">--}}
    {{--<h2>{{ $category->name }}</h2>--}}
    {{--</div>--}}
    <p class="lead">{{ $category->description }}</p>


    <div class="panel panel-default">
        <div class="panel-heading">Actions</div>
        <div class="panel-body">

            @if(!$category->trashed())
                {!! Form::model($category, ['method' => 'DELETE', 'action' => ['Manage\CategoryController@destroy', $category->id]]) !!}
            @else
                {!! Form::model($category, ['method' => 'PATCH', 'action' => ['Manage\CategoryController@restore', $category->id]]) !!}
            @endif
            <div class="btn-group" role="group">
                <a class="btn btn-default"
                   href="{{ URL::action('Manage\ProductController@create_in_category', $category->slug) }}">Add
                    Product</a>
                <a class="btn btn-default"
                   href="{{ URL::action('Manage\CategoryController@edit', $category->id) }}">Edit Category</a>
                <button type="submit" class="btn btn-default">
                    @if(!$category->trashed())
                        {{ trans('category.softdelete_action') }}
                    @else
                        {{ trans('category.restore_action') }}
                    @endif
                </button>
            </div>
            {{ Form::close() }}

        </div>
    </div>


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
                @include('manage.product.partials._productListItem', ['product_item' => $product])
            @endforeach
        </div>
    @else
        <div class="alert alert-info">
            {{  trans('category.no_products') }}
        </div>
    @endif
@endsection