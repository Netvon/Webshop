@extends('layouts.app', ['page_title' => 'Edit product'])

@section('content')
    <h2>Create new Product</h2>
    {!! Form::model($product, ['method' => 'PATCH', 'action' => ['ProductController@update', $product->id]]) !!}
    @include('product.partials._form', ['submitButtonText' => 'Edit Product'])
    {!! Form::close() !!}

    @include('errors.list');
@endsection