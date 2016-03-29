@extends('layouts.arrow_page', ['page_title' => trans('blog.create_title')])

@section('page_content')
    {!! Form::open(['action' => 'Manage\BlogController@store']) !!}
    @include('manage.blog.partials._form', ['submitButtonText' => trans('blog.create_action')])
    {!! Form::close() !!}
@endsection