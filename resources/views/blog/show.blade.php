@extends('layouts.app', ['page_title' => 'ARROW - ' . $blog->title, 'nav_link' => 'blog'])

@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>{{ $blog->title }}</h1>
                </div>
                @include('arrow.partials._breadcrumbs', ['breadcrumbs' => ['ArrowController@index' => 'home', 'BlogController@index' => 'blog', '0' => $blog->title]])
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">

            <div class="row">

                <!-- #blog-post -->

                <div class="col-md-9" id="blog-post">


                    <p class="text-muted text-uppercase mb-small text-right">By {{ $blog->user()->first()->name }}
                        | {{ $blog->user()->first()->created_at }}</p>
                    {!! Markdown::convertToHtml($blog->body) !!}

                </div>
                <!-- /#blog-post -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->
@endsection