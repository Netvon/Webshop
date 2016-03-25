@extends('layouts.app', ['page_title' => 'Category test'])

@section('content')
    <div class="page-header">
        <h2>{{ trans('category.index_title') }}</h2>
    </div>

    @if(auth()->check() && auth()->user()->role === 'admin')
    <div class="panel panel-default">
        <div class="panel-heading">Admin Tools</div>
        <div class="panel-body">
            <a class="btn btn-primary" href="{{ URL::action('CategoryController@create') }}">{{ trans('category.create_title') }}</a>
        </div>
    </div>
    @endif

    <div class="list-group">
        @foreach($categories as $category)
        <a class="list-group-item"
           href="{{URL::action('CategoryController@show', $category->slug)}}" >
            <h4 class="list-group-item-heading">{{$category->name}}</h4>
            <p class="list-group-item-text">{{$category->description}}</p>
            <ul>
                @foreach($category->children as $child)
                    <li>{{ $child->name }}</li>
                @endforeach
            </ul>
        </a>
        @endforeach
    </div>
@endsection