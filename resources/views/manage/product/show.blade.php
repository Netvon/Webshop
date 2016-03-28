@extends('layouts.app', ['page_title' => $product->name])

@section('content')
    <div class="page-header">
        <h2>{{ $product->name }}</h2>
    </div>

    @if(auth()->check() && auth()->user()->role === 'admin')
        <div class="panel panel-default">
            <div class="panel-heading">Admin Tools</div>
            <div class="panel-body">
                <a class="btn btn-primary" href="{{ URL::action('Manage\ProductController@edit', $product->slug) }}">Edit</a>
            </div>
        </div>
    @endif
@endsection