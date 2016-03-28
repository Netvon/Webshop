@extends('layouts.arrow_page', ['page_title' => $product->name])

@section('page_content')
    <div class="panel panel-default">
        <div class="panel-heading">Admin Tools</div>
        <div class="panel-body">
            <a class="btn btn-primary"
               href="{{ URL::action('Manage\ProductController@edit', $product->slug) }}">Edit</a>
        </div>
    </div>
@endsection