@extends('arrow.app', ['page_title' => 'ARROW - Shop'])

@section('content')

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Webshop</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/arrow">Home</a>
                            </li>
                            <li>{{ $nav_link }}</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">


                    <!-- *** LEFT COLUMN ***
			_________________________________________________________ -->

                    <div class="col-sm-3">

                        <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Categories</h3>
                            </div>

                            <div class="panel-body">
                                @if (count($categories))
                                    <ul class="nav nav-pills nav-stacked category-menu">
                                        @foreach($categories as $c)
                                            @if (is_null($c->parent_id))
                                                <li>
                                                <a href="/arrow/shop/categories/{{ $c->slug }}">{{ $c->name }}
                                                    {{--<span class="badge pull-right">42</span>--}}
                                                </a>

                                                @foreach($categories as $ca)
                                                    @if ($c->id == $ca->parent_id)
                                                            <ul>
                                                                <li><a href="/arrow/shop/categories/{{ $ca->slug }}">{{ $ca->name }}</a></li>
                                                            </ul>
                                                    @endif
                                                @endforeach
                                            </li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>

                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Tags</h3>
                                <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> <span class="hidden-sm">Clear</span></a>
                            </div>

                            <div class="panel-body">

                                <form>
                                    <div class="form-group">
                                        @if ($tags != NULL)
                                            @foreach($tags as $t)
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">{{ $t->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>

                                    <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i> Apply</button>

                                </form>

                            </div>
                        </div>
                        <!-- *** MENUS AND FILTERS END *** -->

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

                        <p class="text-muted lead">In our Technology department we offer wide selection of the best products we have found and carefully selected worldwide.</p>

                        <div class="row products">
                            @if (!is_null($products))
                                @foreach($products as $p)
                                    <div class="col-md-4 col-sm-6">
                                        <div class="product">
                                            <div class="image">
                                                <a href="/arrow/shop/products/{{ $p->slug }}">
                                                    <img src="{{ asset('img/product1.jpg' ) }}" alt="" class="img-responsive image1">
                                                </a>
                                            </div>
                                            <!-- /.image -->
                                            <div class="text">
                                                <h3><a href="/arrow/shop/products/{{ $p->slug }}">{{ $p->name }}</a></h3>
                                                <p class="price">$ {{ $p->price }}</p>
                                                <p class="buttons">
                                                    <a href="/arrow/shop/products/{{ $p->slug }}" class="btn btn-default">View detail</a>
                                                    <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                </p>
                                            </div>
                                            <!-- /.text -->
                                        </div>
                                        <!-- /.product -->
                                    </div>

                                @endforeach
                            @endif
                            <!-- /.col-md-4 -->
                        </div>
                        <!-- /.products -->

                        <div class="row">

                            <div class="col-md-12 banner">
                                <a href="#">
                                    <img src="{{ asset('img/arrow.png') }}" alt="" class="img-responsive">
                                </a>
                            </div>

                        </div>


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