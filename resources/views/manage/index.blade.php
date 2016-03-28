@extends('layouts.app', ['page_title' => 'Webshop Manage'])

@section('content')
<div class="page-header">
    <h2>Webshop Manager</h2>
</div>

<ul class="nav nav-pills nav-stacked">
    <li>
        <a href="{{URL::action('Manage\TagController@index')}}">Manage Tags</a>
        <a href="{{URL::action('Manage\CategoryController@index')}}">Manage Categories</a>
        <a href="{{URL::action('Manage\ProductController@create')}}">Create new Product</a>
    </li>
</ul>

@endsection