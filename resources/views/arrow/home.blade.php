@extends('layouts.app', ['page_title' => 'ARROW - Home', 'nav_link' => 'home'])

@section('content')

<section>
    <!-- *** HOMEPAGE CAROUSEL ***
_________________________________________________________ -->

    <div class="home-carousel">

        <div class="dark-mask"></div>

        <div class="container">
            <div class="homepage owl-carousel">
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5 right">
                            <p>
                                <img src="{{ asset('img/logo.png') }}" alt="">
                            </p>
                            <h1>Electronics webshop</h1>
                            <p>
                                We have some pretty awesome products in store for you.
                            </p>
                            <p>Check them out!</p>
                        </div>
                        <div class="col-sm-7">
                            <img class="img-responsive" src="{{ asset('img/arrow.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">

                        <div class="col-sm-7 text-center">
                            <img class="img-responsive" src="{{ asset('img/surface-pro-4.png') }}" alt="">
                        </div>

                        <div class="col-sm-5">
                            <h2>
                                {{ $product_count }}
                                products are in store now</h2>
                            <ul class="list-style-none">
                                @if (is_null($categories))
                                    @foreach($categories as $c)
                                        <li>{{ $c->name }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="item">
                        <img class="img-responsive" src="{{ asset('img/main-slider4.jpg') }}" alt="">
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5 right">
                            <h1>
                            @if ($product_showcase != NULL)
                                {{ $product_showcase->name }}
                            </h1>
                            <p>
                                TODO: Description
                                {{ $product_showcase->description_long }}
                            </p>
                        </div>
                        <div class="col-sm-7">
                            TODO: Image
                            <img class="img-responsive" src="{{ asset('img/' . $product_showcase->images ) }}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.project owl-slider -->
        </div>
    </div>

    <!-- *** HOMEPAGE CAROUSEL END *** -->
</section>

<section class="bar background-white">
    <div class="container">
        <div class="col-md-12">


            <div class="row">
                <div class="col-md-4">
                    <div class="box-simple">
                        <a href="{{ URL::action('ArrowController@about') }}"><div class="icon">
                            <i class="fa fa-users"></i>
                        </div></a>
                        <h3>About us</h3>
                        <p>Who are we?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-simple">
                        <a href="{{ URL::action('CategoryController@index') }}"><div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div></a>
                        <h3>Webshop</h3>
                        <p>Get your stuff here!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-simple">
                        <a href="/arrow/contact"><div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div></a>
                        <h3>Contact</h3>
                        <p>Get in touch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bar background-image-fixed-2 no-mb color-white text-center">
    <div class="dark-mask"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="icon icon-lg"><i class="fa fa-bolt"></i>
                </div>
                <h3 class="text-uppercase">Want to get started?</h3>
                <p class="lead">We have prepared many catagories of electronics to choose from.</p>
                <p class="text-center">
                    <a href="{{ URL::action('CategoryController@index') }}" class="btn btn-template-transparent-black btn-lg">Check out webshop</a>
                </p>
            </div>

        </div>
    </div>
</section>

<section class="bar background-gray no-mb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading text-center">
                    <h2>Our partners</h2>
                </div>

                <ul class="owl-carousel customers">
                    <li class="item">
                        <img src="{{ asset('img/customer-1.png') }}" alt="" class="img-responsive">
                    </li>
                    <li class="item">
                        <img src="{{ asset('img/customer-2.png') }}" alt="" class="img-responsive">
                    </li>
                    <li class="item">
                        <img src="{{ asset('img/customer-3.png') }}" alt="" class="img-responsive">
                    </li>
                    <li class="item">
                        <img src="{{ asset('img/customer-4.png') }}" alt="" class="img-responsive">
                    </li>
                    <li class="item">
                        <img src="{{ asset('img/customer-5.png') }}" alt="" class="img-responsive">
                    </li>
                    <li class="item">
                        <img src="{{ asset('img/customer-6.png') }}" alt="" class="img-responsive">
                    </li>
                </ul>
                <!-- /.owl-carousel -->
            </div>

        </div>
    </div>
</section>
@endsection