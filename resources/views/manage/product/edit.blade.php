@extends('layouts.app', ['page_title' => trans('product.edit_title')])

@section('content')
    <h2>{{ trans('product.edit_title') }}</h2>
    {!! Form::model($product, ['method' => 'PATCH', 'action' => ['Manage\ProductController@update', $product->id]]) !!}
    @include('manage.product.partials._form', ['submitButtonText' => trans('product.edit_action')])
    {!! Form::close() !!}
@endsection

@section('javascript')
    <script type="text/javascript" src="/js/product.js"></script>
@endsection