@extends('layouts.app', ['page_title' => 'ARROW - Blog', 'nav_link' => 'blog'])

@section('content')
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Blog</h1>
            </div>
            @include('arrow.partials._breadcrumbs', ['breadcrumbs' => ['ArrowController@index' => 'home', '0' => 'blog']])
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <!-- *** LEFT COLUMN ***
     _________________________________________________________ -->
            <div class="col-md-9" id="blog-listing-medium">
                @if ($blogs != NULL)
                    @foreach($blogs as $b)
                        <section class="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2><a href="{{ URL::action('BlogController@show', $b->slug) }}">{{ $b->title }}</a></h2>
                                    <div class="clearfix">
                                        <p class="author-category">By {{ $b->user()->first()->name }}
                                        </p>
                                        <p class="date-comments">
                                            <i class="fa fa-calendar-o"></i> {{ $b->user()->first()->created_at }}
                                        </p>
                                    </div>
                                    <p class="intro">{{ str_limit($b->body) }}</p>
                                    <p class="read-more"><a href="{{ URL::action('BlogController@show', $b->slug) }}" class="btn btn-template-main">Continue reading</a>
                                    </p>
                                </div>
                            </div>
                        </section>
                    @endforeach
                @endif
            </div>
            <!-- /.col-md-9 -->

            <!-- *** LEFT COLUMN END *** -->

            <!-- *** RIGHT COLUMN ***
     _________________________________________________________ -->

            <div class="col-md-3">

                <!-- *** MENUS AND WIDGETS ***
_________________________________________________________ -->
                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Goal</h3>
                    </div>

                    <div class="panel-body text-widget">
                        <p>Showing a blog of all the things that have been done to this webpage
                        </p>

                    </div>
                </div>

                <!-- *** MENUS AND FILTERS END *** -->

            </div>
            <!-- /.col-md-3 -->

            <!-- *** RIGHT COLUMN END *** -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
@endsection