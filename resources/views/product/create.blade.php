@extends('layouts.app', ['page_title' => trans('product.create_title')])

@section('content')
    <h2>{{ trans('product.create_title') }}</h2>
    {!! Form::open(['url' => 'products']) !!}
    @include('product.partials._form', ['submitButtonText' => trans('product.create_action')])
    {!! Form::close() !!}
@endsection