@extends('layouts.arrow_page', ['page_title' => trans('category.edit_title')])

@section('page_breadcrumbs')
    @include('manage.partials._breadcrumb')
    <li>{!! Html::linkAction('Manage\CategoryController@index', trans('category.index_title')) !!}</li>
    <li>{{ trans('category.edit_title') }}</li>
@endsection

@section('page_content')

{{--    <h2>{{ trans('category.edit_title') }}</h2>--}}
    {!! Form::model($category, ['method' => 'PATCH', 'action' => ['Manage\CategoryController@update', $category->id]]) !!}
        @include('manage.category.partials._form', ['submitButtonText' => trans('category.edit_action')])
    {!! Form::close() !!}

    {!! Form::model($category, ['method' => 'DELETE', 'action' => ['Manage\CategoryController@destroy', $category->id]]) !!}
        <div class="form-group">
            {!! Form::submit(trans('category.delete_action'), ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection