@extends('layouts.app', ['page_title' => trans('product.create_title')])

@section('content')
    @if(!$create_in_category)
        <h2>{{ trans('product.create_title') }}</h2>
    @else
        <h2>{{ trans('product.create_title_category', ['name' => $create_in_category->name]) }}</h2>
    @endif
    {!! Form::open(['url' => 'products']) !!}
    @include('product.partials._form', ['submitButtonText' => trans('product.create_action')])
    {!! Form::close() !!}
@endsection