@extends('layouts.arrow_page', ['page_title' => 'Management Tools'])

@section('page_content')
<ul class="nav nav-pills nav-stacked">
    <li>
        <a href="{{URL::action('Manage\TagController@index')}}">Manage Tags</a>
        <a href="{{URL::action('Manage\CategoryController@index')}}">Manage Categories</a>
        <a href="{{URL::action('Manage\ProductController@create')}}">Create new Product</a>
    </li>
</ul>

@endsection