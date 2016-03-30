@extends('arrow.app', ['page_title' => 'ARROW - ' . $product->name])

@section('content')
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>{{ $product->name }}</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/arrow">Home</a>
                            </li>
                            @foreach($breadcrumbs as $key => $value)
                                @if ($key == '0')
                                    <li>{{ $value }}</li>
                                @else
                                    <li><a href="{{ $key }}">{{ $value }}</a></li>
                                @endif
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** RIGHT COLUMN ***
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
                                                @if ($product->category_id == $c->id)
                                                    <li class="active">
                                                @else
                                                    <li>
                                                        @endif
                                                        <a href="/arrow/shop/categories/{{ $c->id }}">{{ $c->name }}
                                                            {{--<span class="badge pull-right">42</span>--}}
                                                        </a>

                                                        <ul>
                                                            @foreach($categories as $ca)
                                                                @if ($c->id == $ca->parent_id)
                                                                    <li><a href="/arrow/shop/categories/{{ $ca->id }}">{{ $ca->name }}</a></li>
                                                                @endif
                                                            @endforeach
                                                        </ul>

                                                    </li>
                                                @endif
                                                @endforeach
                                            @endif
                                    </ul>
                            </div>
                        </div>

                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Brands</h3>
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

                    <!-- *** RIGHT COLUMN END *** -->

                    <!-- *** LEFT COLUMN ***
		    _________________________________________________________ -->

                    <div class="col-md-9">

                        <p class="lead">{{ $product->description_short }}
                        </p>
                        <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll to product details, material & care and sizing</a>
                        </p>

                        <div class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="{{ asset('img/detailbig1.jpg') }}" alt="" class="img-responsive">
                                </div>

                                @if ($product->is_in_stock == 0)
                                <div class="ribbon sale">
                                    <div class="theribbon">OUT OF STOCK</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                                @else
                                <div class="ribbon new">
                                    <div class="theribbon">IN STOCK</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                                @endif

                            </div>
                            <div class="col-sm-6">
                                <div class="box">

                                    {!! Form::open(['action' => 'CartController@store']) !!}
                                    {!! Form::hidden('product_id', $product->id) !!}
                                        <p class="price">$ {{ $product->price }}</p>

                                        <p class="text-center">
                                            <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                            {{Form::number('quantity', 1)}}
                                        </p>

                                    {!! Form::close() !!}
                                </div>

                                <div class="row" id="thumbs">
                                    <div class="col-xs-4">
                                        <a href="{{ asset('img/detailbig1.jpg') }}" class="thumb">
                                            <img src="{{ asset('img/detailsquare.jpg') }}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="{{ asset('img/detailbig2.jpg') }}" class="thumb">
                                            <img src="{{ asset('img/detailsquare2.jpg') }}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="{{ asset('img/detailbig3.jpg') }}" class="thumb">
                                            <img src="{{ asset('img/detailsquare3.jpg') }}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="box" id="details">
                            <p>
                                <h4>Product description</h4>
                                <p>{{ $product->description_long }}</p>
                                {{--<h4>Material & care</h4>--}}
                                {{--<ul>--}}
                                    {{--<li>Polyester</li>--}}
                                    {{--<li>Machine wash</li>--}}
                                {{--</ul>--}}
                                {{--<h4>Size & Fit</h4>--}}
                                {{--<ul>--}}
                                    {{--<li>Regular fit</li>--}}
                                    {{--<li>The model (height 5'8" and chest 33") is wearing a size S</li>--}}
                                {{--</ul>--}}

                                {{--<blockquote>--}}
                                    {{--<p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>--}}
                                    {{--</p>--}}
                                {{--</blockquote>--}}
                        </div>

                        {{--<div class="box social" id="product-social">--}}
                            {{--<h4>Show it to your friends</h4>--}}
                            {{--<p>--}}
                                {{--<a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>--}}
                            {{--</p>--}}
                        {{--</div>--}}

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="box text-uppercase">
                                    <h3>You may also like these products</h3>
                                </div>
                            </div>
                            @if (count($products) > 0)
                                @foreach($products as $p)
                                    <div class="col-md-3 col-sm-6">
                                        <div class="product">
                                            <div class="image">
                                                <a href="/arrow/shop/products/{{ $p->id }}">
                                                    <img src="{{ asset('img/product2.jpg') }}" alt="" class="img-responsive image1">
                                                </a>
                                            </div>
                                            <div class="text">
                                                <h3>{{ $p->name }}</h3>
                                                <p class="price">$ {{ $p->price }}</p>

                                            </div>
                                        </div>
                                        <!-- /.product -->
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        {{--<div class="row">--}}
                            {{--<div class="col-md-3 col-sm-6">--}}
                                {{--<div class="box text-uppercase">--}}
                                    {{--<h3>Products viewed recently</h3>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="col-md-3 col-sm-6">--}}
                                {{--<div class="product">--}}
                                    {{--<div class="image">--}}
                                        {{--<a href="#">--}}
                                            {{--<img src="{{ asset('img/product3.jpg') }}" alt="" class="img-responsive image1">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="text">--}}
                                        {{--<h3>Fur coat</h3>--}}
                                        {{--<p class="price">$143</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /.product -->--}}
                            {{--</div>--}}

                            {{--<div class="col-md-3 col-sm-6">--}}
                                {{--<div class="product">--}}
                                    {{--<div class="image">--}}
                                        {{--<a href="#">--}}
                                            {{--<img src="{{ asset('img/product1.jpg') }}" alt="" class="img-responsive image1">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="text">--}}
                                        {{--<h3>Fur coat</h3>--}}
                                        {{--<p class="price">$143</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /.product -->--}}
                            {{--</div>--}}


                            {{--<div class="col-md-3 col-sm-6">--}}
                                {{--<div class="product">--}}
                                    {{--<div class="image">--}}
                                        {{--<a href="#">--}}
                                            {{--<img src="{{ asset('img/product2.jpg') }}" alt="" class="img-responsive image1">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="text">--}}
                                        {{--<h3>Fur coat</h3>--}}
                                        {{--<p class="price">$143</p>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /.product -->--}}
                            {{--</div>--}}

                        </div>

                    </div>
                    <!-- /.col-md-9 -->


                    <!-- *** LEFT COLUMN END *** -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection