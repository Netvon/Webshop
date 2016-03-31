@extends('layouts.arrow_page', ['page_title' => trans('blog.create_title')])

@section('page_breadcrumbs')
    @include('manage.partials._breadcrumb')
    <li>{!! Html::linkAction('Manage\BlogController@index', trans('blog.index_title')) !!}</li>
    <li>{{ trans('blog.create_title') }}</li>
@endsection

@section('page_content')
    {!! Form::open(['action' => 'Manage\BlogController@store']) !!}
    @include('manage.blog.partials._form', ['submitButtonText' => trans('blog.create_action')])
    {!! Form::close() !!}
@endsection