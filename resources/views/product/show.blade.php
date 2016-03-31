@extends('layouts.app', ['page_title' => 'ARROW - ' . $product->name, 'nav_link' => 'shop'])

@section('content')

    {{--{{dd($specifications)}}--}}
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>{{ $product->name }}</h1>
                    </div>
                    @include('arrow.partials._breadcrumbs', ['breadcrumbs' => ['ArrowController@index' => 'home', 'CategoryController@index' => 'shop', '0' => $product->name]])
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** RIGHT COLUMN ***
		  _________________________________________________________ -->

                    <div class="col-sm-3">

                        @include('arrow.partials._filters', ['categories' => App\Category::with('children.children')->get(), 'product' => $product, 'category' => NULL, 'tags' => App\Tag::all()])

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
                                    @if ($product->images_by_type('detail')->first() != NULL)
                                    <img src="{{ asset($product->images_by_type('detail')->first()->image_uri) }}" alt="" class="img-responsive">
                                    @else
                                    <img src="{{ asset('img/texture-bw.png') }}" alt="" class="img-responsive">
                                    @endif
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
                                    @if($product->is_in_stock)
                                    {!! Form::open(['action' => 'CartController@store']) !!}
                                    {!! Form::hidden('product_id', $product->id) !!}
                                    <p class="price">$ {{ $product->price }}</p>

                                    <p class="text-center">
                                        <button type="submit" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                        {{Form::number('quantity', 1)}}
                                    </p>

                                    {!! Form::close() !!}
                                    @else
                                        <p class="price">$ {{ $product->price }}</p>
                                    @endif
                                </div>
                            </div>

                        </div>


                        <div class="box" id="details">
                            @if ($product->description_long)
                            <p>
                                <h4>Product description</h4>
                                <p>{{ $product->description_long }}</p>
                            @endif
                            @if (count($specifications) > 0)
                                <h4>Specifications</h4>

                                <ul>
                                    @foreach($specifications as $s)
                                        <li>{{ $s->name }}: {{ $s->value }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

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
                                                <a href="{{ URL::action('ProductController@show', $p->slug) }}">
                                                    @if ($p->images_by_type('thumbnail')->first() != NULL)
                                                        <img src="{{ asset($p->images_by_type('thumbnail')->first()->image_uri) }}" alt="{{ $p->name }}" class="img-responsive image1">
                                                    @else
                                                        <img src="{{ asset('img/texture-bw.png') }}" alt="{{ $p->name }}" class="img-responsive image1">
                                                    @endif
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