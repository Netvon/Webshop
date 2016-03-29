@extends('layouts.arrow_page', ['page_title' => trans('product.edit_title')])

@section('page_breadcrumbs')
    @include('manage.partials._breadcrumb')
    <li>{{ trans('product.edit_title') }}</li>
@endsection

@section('page_content')
    {!! Form::model($product, ['method' => 'PATCH', 'action' => ['Manage\ProductController@update', $product->id]]) !!}
    @include('manage.product.partials._form', ['submitButtonText' => trans('product.edit_action')])
    {!! Form::close() !!}
@endsection

@section('javascript')
    <script type="text/javascript" src="/js/product.js"></script>
@endsection