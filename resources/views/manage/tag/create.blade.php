@extends('layouts.app', ['page_title' => trans('tag.create_title')])

@section('content')
    <h2>{{ trans('tag.create_title') }}</h2>
    {!! Form::open(['action' => 'Manage\TagController@store']) !!}
    @include('manage.tag.partials._form', ['submitButtonText' => trans('tag.create_action')])
    {!! Form::close() !!}
@endsection