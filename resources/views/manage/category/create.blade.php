@extends('layouts.app', ['page_title' => trans('category.create_title')])

@section('content')
    <h2>{{ trans('category.create_title') }}</h2>
    {!! Form::open(['action' => 'Manage\CategoryController@store']) !!}
        @include('manage.category.partials._form', ['submitButtonText' => trans('category.create_action')])
    {!! Form::close() !!}
@endsection