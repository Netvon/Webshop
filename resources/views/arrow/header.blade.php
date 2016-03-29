<header>

    <!-- *** TOP ***
_________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 contact">
                    <p class="hidden-sm hidden-xs">Contact us on info&#64;arrow.com</p>
                    <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i
                                    class="fa fa-phone"></i></a> <a href="#" data-animate-hover="pulse"><i
                                    class="fa fa-envelope"></i></a>
                    </p>
                </div>
                <div class="col-xs-7">
                    <div class="login">
                        @if (Auth::guest())
                            <a href="{{ URL::action('Auth\AuthController@login') }}"><i
                                        class="fa fa-sign-in"></i>{{ trans('auth.login') }}</a>
                            <a href="{{ URL::action('Auth\AuthController@register') }}"><i
                                        class="fa fa-user"></i>{{ trans('auth.register') }}</a>
                        @else
                            <a href="{{ URL::action('Auth\AuthController@logout') }}"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>

                            @if(auth_has_role('admin'))
                                <a href="{{ URL::action('Manage\ManageController@index') }}"><i class="fa fa-cog"></i> Management tools</a>
                            @endif
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- *** TOP END *** -->

    <!-- *** NAVBAR ***
_________________________________________________________ -->

    <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

        <div class="navbar navbar-default yamm" role="navigation" id="navbar">

            <div class="container">
                <div class="navbar-header">

                    <a class="navbar-brand home" href="/arrow">
                        <img src="{{ asset('img/logo.png') }}" alt="Arrow logo" class="logo, hidden-xs hidden-sm">
                        <img src="{{ asset('img/logo-small.png') }}" alt="Arrow logo"
                             class="visible-xs visible-sm"><span
                                class="sr-only">Arrow - Go to homepage</span>
                    </a>
                    <div class="navbar-buttons">
                        <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse"
                                data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                    </div>
                </div>
                <!--/.navbar-header -->

                <div class="navbar-collapse collapse" id="navigation">

                    <ul class="nav navbar-nav navbar-right">
                        <li @if ($nav_link === 'arrow')
                            class="dropdown active"
                            @endif
                            >
                            <a href="/arrow">Home</a>
                        </li>

                        @if(auth_has_role('admin'))
                            <li @if($nav_link == 'manage') class="active" @endif>
                                <a href="{{ URL::action('Manage\ManageController@index') }}">
                                    Management tools
                                </a>
                            </li>
                        @endif

                        <li @if ($nav_link === 'shop')
                            class="dropdown active"
                            @endif
                        >
                            <a href="/arrow/shop">Shop</a>
                        </li>
                        <li class="dropdown use-yamm yamm-fw
                            @if ($nav_link === 'categories')
                                , dropdown active
                            @endif
                        ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<b
                                        class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img src="{{asset('img/template-easy-customize.png')}}"
                                                     class="img-responsive hidden-xs" alt="">
                                            </div>
                                            <div class="col-sm-3">

                                                @if (count($categories) > 0)
                                                    <ul>
                                                        @foreach($categories as $c)
                                                            @if (!is_null($c->parent_id))
                                                                <li><h5><a href="#">{{$c->name}}</a></h5></li>
                                                                @foreach($categories as $ca)
                                                                    @if ($c->id == $ca->parent_id)
                                                                            <li><a href="#">{{ $ca->name }}</a></li>
                                                                    @endif
                                                                @endforeach
                                                            @endif

                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!-- ========== FULL WIDTH MEGAMENU END ================== -->
                        <li
                            @if ($nav_link === 'about')
                            class="dropdown active"
                            @endif
                        >
                            <a href="/arrow/about">About us</a>
                        </li>
                        <li
                            @if ($nav_link === 'contact')
                            class="dropdown active"
                            @endif
                        >
                            <a href="/arrow/contact">Contact</a>
                        </li>
                    </ul>

                </div>
                <!--/.nav-collapse -->

            </div>


        </div>
        <!-- /#navbar -->

    </div>

    <!-- *** NAVBAR END *** -->

</header>


<!-- *** LOGIN MODAL ***
_________________________________________________________ -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Login">Customer login</h4>
            </div>
            <div class="modal-body">
                <form action="customer-orders.html" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email_modal" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password_modal" placeholder="password">
                    </div>

                    <p class="text-center">
                        <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                    </p>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- *** LOGIN MODAL END *** -->