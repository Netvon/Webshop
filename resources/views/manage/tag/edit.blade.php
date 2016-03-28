@extends('layouts.app', ['page_title' => trans('tag.edit_title')])

@section('content')
    <h2>{{ trans('tag.edit_title') }}</h2>
    {!! Form::model($tag, ['method' => 'PATCH', 'action' => ['Manage\TagController@update', $tag->id]]) !!}
    @include('manage.tag.partials._form', ['submitButtonText' => trans('tag.edit_action')])
    {!! Form::close() !!}
@endsection