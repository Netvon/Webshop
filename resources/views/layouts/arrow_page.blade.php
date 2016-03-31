@extends('layouts.app', ['page_title' => 'Arrow - '.$page_title, 'nav_link' => 'manage', 'categories' => \App\Category::all()])

@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>{{ $page_title }}</h1>
                </div>
                @include('arrow.partials._breadcrumbs', ['breadcrumbs' => ['ArrowController@index' => 'home', 'Manage\ManageController@index' => 'manage']])
            </div>
        </div>
    </div>

    {{--<div id="content" class="clearfix">--}}
        <div class="container">
            @yield('page_content')
        </div>
    {{--</div>--}}
@endsection