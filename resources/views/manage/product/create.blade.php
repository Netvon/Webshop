@extends('layouts.arrow_page', ['page_title' => trans('product.create_title')])

@section('page_breadcrumbs')
    @include('manage.partials._breadcrumb')
    <li>{{ trans('product.create_title') }}</li>
@endsection

@section('page_content')
    {{--@if(!$create_in_category)--}}
        {{--<h2>{{ trans('product.create_title') }}</h2>--}}
    {{--@else--}}
        {{--<h2>{{ trans('product.create_title_category', ['name' => $create_in_category->name]) }}</h2>--}}
    {{--@endif--}}
    {!! Form::open(['action' => 'Manage\ProductController@store', 'files' => true]) !!}

    @include('manage.product.partials._form', ['submitButtonText' => trans('product.create_action')])
    {!! Form::close() !!}
@endsection

@section('javascript')
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/product.js"></script>
@endsection