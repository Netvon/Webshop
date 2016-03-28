@extends('layouts.arrow_page', ['page_title' => trans('tag.edit_title')])

@section('page_breadcrumbs')
    <li><a href="/manage">Manage</a></li>
    <li>{{ trans('tag.edit_title') }}</li>
@endsection

@section('page_content')
    {!! Form::model($tag, ['method' => 'PATCH', 'action' => ['Manage\TagController@update', $tag->id]]) !!}
    @include('manage.tag.partials._form', ['submitButtonText' => trans('tag.edit_action')])
    {!! Form::close() !!}
@endsection