@extends('layouts.arrow_page', ['page_title' => trans('category.create_title')])

@section('page_content')
{{--    <h2>{{ trans('category.create_title') }}</h2>--}}
    {!! Form::open(['action' => 'Manage\CategoryController@store']) !!}
        @include('manage.category.partials._form', ['submitButtonText' => trans('category.create_action')])
    {!! Form::close() !!}
@endsection