@extends('layouts.arrow_page', ['page_title' => trans('cart.index_title'), 'nav_link' => 'cart'])

@section('page_content')
    @if(count($cart) > 0)
        <div class="col-md-12">
            <p class="text-muted lead">You currently have {{ count($cart) }} item(s) in your cart.</p>
        </div>

        <div class="col-md-9 clearfix" id="basket">

            <div class="box">

                {!! Form::open() !!}

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th colspan="2">Product</th>
                                <th>Quantity</th>
                                <th>Unit price</th>
                                <th colspan="2">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cart as $pq)
                                <tr>
                                    <td>
                                        <a href="{{ URL::action('ProductController@show', ['products' => $pq['product']->slug]) }}">
                                            <img  alt="{{ $pq['product']->name }}">
                                        </a>
                                    </td>
                                    <td><a href="{{ URL::action('ProductController@show', ['products' => $pq['product']->slug]) }}">
                                            {{ $pq['product']->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <input type="number" value="{{ $pq['quantity'] }}" class="form-control">
                                    </td>
                                    <td>{{ '$'.$pq['product']->price }}</td>
                                    <td>{{ '$'.($pq['product']->price * $pq['quantity'])}}</td>
                                    <td><a href="#"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th colspan="5">Total</th>
                                <th colspan="2">----</th>
                            </tr>
                            </tfoot>
                        </table>

                    </div>
                    <!-- /.table-responsive -->

                    <div class="box-footer">
                        <div class="pull-left">
                            <a href="{{ URL::action('CategoryController@index') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>
                                Continue shopping</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ URL::action('CartController@order') }}" class="btn btn-template-main">Proceed to checkout <i
                                        class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>

                {!! Form::close() !!}

            </div>
    @else
        @include('notification.partials._alert', ['message' => trans('cart.empty'), 'message_level' => 'info'])
    @endif
@endsection