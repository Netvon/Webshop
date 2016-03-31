@extends('layouts.app', ['page_title' => 'ARROW - Checkout', 'nav_link' => 'checkout'])

@section('content')
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Checkout - Order review</h1>
                    </div>
                    @include('arrow.partials._breadcrumbs', ['breadcrumbs' => ['ArrowController@index' => 'home', 'CategoryController@index' => 'shop', '0' => 'checkout']])
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                    <div class="col-md-9 clearfix" id="checkout">

                        <div class="box">
                            <form method="post" action="{{ URL::action('OrderController@success') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a><i class="fa fa-map-marker"></i><br>Address</a>
                                    </li>
                                    <li class="active"><a><i class="fa fa-eye"></i><br>Order Review</a>
                                    </li>
                                </ul>

                                <div class="content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th colspan="3">Product</th>
                                                    <th>Quantity</th>
                                                    <th>Unit price</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                            @foreach($order->products as $p)
                                                <tr>
                                                    {{--<td>--}}
                                                        {{--<a>--}}
                                                            {{--@if ($r['product']->images_by_type('thumbnail')->first() != NULL)--}}
                                                                {{--<img src="{{ asset($r['product']->images_by_type('thumbnail')->first()->image_uri) }}" alt="{{ $r['product']->name }}">--}}
                                                            {{--@else--}}
                                                                {{--<img src="{{ asset('img/texture-bw.png') }}" alt="{{ $r['product']->name }}">--}}
                                                            {{--@endif--}}
                                                        {{--</a>--}}
                                                    {{--</td>--}}
                                                    <td colspan="3"><a href="{{ URL::action('ProductController@show', $p->slug) }}">{{ $p->name }}</a>
                                                    </td>
                                                    <td>{{ $p->pivot->quantity }}</td>
                                                    <td>$ {{ $p->price }}</td>
                                                    <td>$ {{ ($p->price * $p->pivot->quantity)}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="5">Total</th>
                                                    <th>$ {{ $order->price }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.content -->

                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="{{ URL::action('OrderController@index') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to Shipping Address</a>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-template-main">Place an order<i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.col-md-9 -->

                    <div class="col-md-3">

                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Order summary</h3>
                            </div>
                            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Order subtotal</td>
                                            <th>$ {{ $order->price }}</th>
                                        </tr>
                                        <tr>
                                            <td>Shipping and handling</td>
                                            <th>$0.00</th>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <th>$0.00</th>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <th>$ {{ $order->price }}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection