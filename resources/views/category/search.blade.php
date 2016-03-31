@extends('layouts.app', ['page_title' => 'ARROW - Searchresults' , 'nav_link' => 'shop'])

@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Webshop</h1>
                </div>
                @include('arrow.partials._breadcrumbs', ['breadcrumbs' => ['ArrowController@index' => 'home', 'CategoryController@index' => 'shop', '0' => $request->body]])
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">

            <div class="row">


                <!-- *** LEFT COLUMN ***
        _________________________________________________________ -->

                <div class="col-sm-3">

                    @include('arrow.partials._filters', ['categories' => App\Category::with('children.children')->get(), 'category' => NULL, 'product' => NULL, 'tags' => App\Tag::all()])

                    {{--<div class="banner">--}}
                    {{--<a href="shop-category.html">--}}
                    {{--<img src="{{ asset('img/banner.jpg') }}" alt="sales 2014" class="img-responsive">--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--<!-- /.banner -->--}}

                </div>
                <!-- /.col-md-3 -->

                <!-- *** LEFT COLUMN END *** -->

                <!-- *** RIGHT COLUMN ***
        _________________________________________________________ -->

                <div class="col-sm-9">

                    @include('category.partials._product_list', ['products' => $search_products])

                </div>
                <!-- /.col-md-9 -->

                <!-- *** RIGHT COLUMN END *** -->

            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->
@endsection