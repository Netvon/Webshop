@extends('layouts.app', ['page_title' => trans('manage.category.create_title')])

@section('content')
    <h2>{{ trans('category.create_title') }}</h2>
    {!! Form::open(['url' => 'categories']) !!}
        @include('manage.category.partials._form', ['submitButtonText' => trans('manage.category.create_action')])
    {!! Form::close() !!}
@endsection