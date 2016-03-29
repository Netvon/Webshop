@extends('layouts.arrow_page', ['page_title' => trans('blog.edit_title')])

@section('page_content')

    {{--    <h2>{{ trans('category.edit_title') }}</h2>--}}
    {!! Form::model($blog, ['method' => 'PATCH', 'action' => ['Manage\BlogController@update', $blog->id]]) !!}
    @include('manage.blog.partials._form', ['submitButtonText' => trans('blog.edit_action')])
    {!! Form::close() !!}

    {!! Form::model($blog, ['method' => 'DELETE', 'action' => ['Manage\BlogController@destroy', $blog->id]]) !!}
    <div class="form-group">
        {!! Form::submit(trans('blog.delete_action'), ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection