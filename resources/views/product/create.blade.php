@extends('layouts.app', ['page_title' => 'Create product'])

@section('content')
    <h2>Create new Product</h2>
    {!! Form::open(['url' => 'products']) !!}
    @include('product.partials._form', ['submitButtonText' => 'Add Product'])
    {!! Form::close() !!}

    @include('errors.list');
@endsection