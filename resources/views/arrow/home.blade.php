@extends('arrow.app', ['page_title' => 'Home'])

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
                                <img src="img/logo.png" alt="">
                            </p>
                            <h1>Electronics webshop</h1>
                            <p>Catagorie 1. Catagorie 2. Catagorie 3. Catagorie 4. Catagorie 5. Catagorie 6.</p>
                        </div>
                        <div class="col-sm-7">
                            <img class="img-responsive" src="img/template-homepage.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">

                        <div class="col-sm-7 text-center">
                            <img class="img-responsive" src="img/template-mac.png" alt="">
                        </div>

                        <div class="col-sm-5">
                            <h2>46 HTML pages full of features</h2>
                            <ul class="list-style-none">
                                <li>Sliders and carousels</li>
                                <li>4 Header variations</li>
                                <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                                <li>+ 11 extra pages showing template features</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5 right">
                            <h1>Design</h1>
                            <ul class="list-style-none">
                                <li>Clean and elegant design</li>
                                <li>Full width and boxed mode</li>
                                <li>Easily readable Roboto font and awesome icons</li>
                                <li>7 preprepared colour variations</li>
                            </ul>
                        </div>
                        <div class="col-sm-7">
                            <img class="img-responsive" src="img/template-easy-customize.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-7">
                            <img class="img-responsive" src="img/template-easy-code.png" alt="">
                        </div>
                        <div class="col-sm-5">
                            <h1>Easy to customize</h1>
                            <ul class="list-style-none">
                                <li>7 preprepared colour variations.</li>
                                <li>Easily to change fonts</li>
                            </ul>
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
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h3>About us</h3>
                        <p>Who are we?</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-simple">
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <h3>Webshop</h3>
                        <p>Get your stuff here!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-simple">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
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
                    <a href="index2.html" class="btn btn-template-transparent-black btn-lg">Check out webshop</a>
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
                        <img src="img/customer-1.png" alt="" class="img-responsive">
                    </li>
                    <li class="item">
                        <img src="img/customer-2.png" alt="" class="img-responsive">
                    </li>
                    <li class="item">
                        <img src="img/customer-3.png" alt="" class="img-responsive">
                    </li>
                    <li class="item">
                        <img src="img/customer-4.png" alt="" class="img-responsive">
                    </li>
                    <li class="item">
                        <img src="img/customer-5.png" alt="" class="img-responsive">
                    </li>
                    <li class="item">
                        <img src="img/customer-6.png" alt="" class="img-responsive">
                    </li>
                </ul>
                <!-- /.owl-carousel -->
            </div>

        </div>
    </div>
</section>

@endsection