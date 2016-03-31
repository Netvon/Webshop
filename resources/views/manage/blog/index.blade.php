@extends('layouts.arrow_page', ['page_title' => trans('blog.index_title')])

@section('page_breadcrumbs')
    @include('manage.partials._breadcrumb')
    <li>{{ trans('blog.index_title') }}</li>
@endsection

@section('page_content')

    <div class="panel panel-default">
        <div class="panel-heading">Actions</div>
        <div class="panel-body">
            <a class="btn btn-default"
               href="{{ URL::action('Manage\BlogController@create') }}">{{ trans('blog.create_title') }}</a>
        </div>
        <div class="list-group">
            @foreach(App\Blog::withTrashed()->get() as $blog)
                @include('manage.blog.partials._blogListItem', ['blog_item' => $blog])
            @endforeach
        </div>
    </div>

@endsection