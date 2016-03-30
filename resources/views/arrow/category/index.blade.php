@extends('layouts.app', ['page_title' => 'ARROW - Shop', 'nav_link' => 'shop'])

@section('content')

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Webshop</h1>
                    </div>
                    @include('arrow.partials._breadcrumbs', ['breadcrumbs' => ['ArrowController@index' => 'home', '0' => 'shop']])
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

                        @include('arrow.category.partials._product_list', ['products' => App\Product::all()])


                        {{--<div class="pages">--}}

                            {{--<p class="loadMore">--}}
                                {{--<a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>--}}
                            {{--</p>--}}

                            {{--<ul class="pagination">--}}
                                {{--<li><a href="#">&laquo;</a>--}}
                                {{--</li>--}}
                                {{--<li class="active"><a href="#">1</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">2</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">3</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">4</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">5</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="#">&raquo;</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}


                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

@endsection