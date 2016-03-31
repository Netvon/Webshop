@extends('layouts.arrow_page', ['page_title' => trans('product.index_title')])

@section('page_breadcrumbs')
    @include('manage.partials._breadcrumb')
    <li>{{ trans('product.index_title') }}</li>
@endsection

@section('page_content')

    <div class="panel panel-default">
        <div class="panel-heading">Actions</div>
        <div class="panel-body">
            <a class="btn btn-default"
               href="{{ URL::action('Manage\ProductController@create') }}">{{ trans('product.create_title') }}</a>
        </div>
        <div class="list-group">
            @foreach(App\Product::withTrashed()->get() as $product)
                @include('manage.product.partials._productListItem', ['product_item' => $product])
            @endforeach
        </div>
    </div>

@endsection