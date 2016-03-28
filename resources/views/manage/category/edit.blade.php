@extends('layouts.app', ['page_title' => trans('manage.category.edit_title')])

@section('content')
    <h2>{{ trans('category.edit_title') }}</h2>
    {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoryController@update', $category->id]]) !!}
        @include('manage.category.partials._form', ['submitButtonText' => trans('manage.category.edit_action')])
    {!! Form::close() !!}

    {!! Form::model($category, ['method' => 'DELETE', 'action' => ['CategoryController@destroy', $category->id]]) !!}
        <div class="form-group">
            {!! Form::submit(trans('category.delete_action'), ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection