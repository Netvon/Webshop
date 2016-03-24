@extends('layouts.app', ['page_title' => 'Category test'])

@section('content')
    <h2>Create new Category</h2>
    {!! Form::open(['url' => 'categories']) !!}
        @include('category.partials._form', ['submitButtonText' => 'Add Category'])
    {!! Form::close() !!}

    @include('errors.list');
@endsection