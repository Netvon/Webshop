@extends('layouts.arrow_page', ['page_title' => trans('category.index_title')])

@section('page_content')
    {{--<div class="page-header">--}}
        {{--<h2>{{ trans('category.index_title') }}</h2>--}}
    {{--</div>--}}

    <div class="panel panel-default">
        <div class="panel-heading">Actions</div>
        <div class="panel-body">
            <a class="btn btn-default"
               href="{{ URL::action('Manage\CategoryController@create') }}">{{ trans('category.create_title') }}</a>
        </div>
        <div class="list-group">
            @foreach($categories as $category)
                @include('manage.category.partials._categoryListItem', ['cat_item' => $category])
            @endforeach
        </div>
    </div>

@endsection