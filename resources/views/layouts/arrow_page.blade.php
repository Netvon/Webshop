@extends('layouts.app', ['page_title' => 'Arrow - '.$page_title, 'nav_link' => 'manage', 'categories' => \App\Category::all()])

@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>{{ $page_title }}</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb">
                        @yield('page_breadcrumbs')
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div id="content" class="clearfix">
        <div class="container">
            @yield('page_content')
        </div>
    </div>
@endsection