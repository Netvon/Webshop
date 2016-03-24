@extends('layouts.app', ['page_title' => 'Category test'])

@section('content')
    <h2>Edit Category: {{$category->name}}</h2>
    {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoryController@update', $category->id]]) !!}
        @include('category.partials._form', ['submitButtonText' => 'Edit Category'])
    {!! Form::close() !!}

    {!! Form::model($category, ['method' => 'DELETE', 'action' => ['CategoryController@destroy', $category->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Category', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}}
    @include('errors.list');
@endsection