@extends('layouts.arrow_page', ['page_title' => trans('cart.index_title'), 'nav_link' => 'cart'])

@section('page_content')
    @if(count($cart) > 0)
        <div class="col-md-12">
            <p class="text-muted lead">You currently have {{ count($cart) }} item(s) in your cart.</p>
        </div>

        <div class="col-md-9 clearfix" id="basket">

            <div class="box">

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
                                        <img alt="{{ $pq['product']->name }}">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ URL::action('ProductController@show', ['products' => $pq['product']->slug]) }}">
                                        {{ $pq['product']->name }}
                                    </a>
                                </td>
                                <td>
                                    <div class="form-control">{{ $pq['quantity'] }}</div>
                                    {!! Form::open(['action' => ['CartController@store'], 'class' => 'form-inline']) !!}
                                    {!! Form::hidden('product_id', $pq['product']->id) !!}
                                    {!! Form::hidden('quantity', $pq['quantity'] + 1) !!}
                                    <button type="submit"><i class="fa fa-plus"></i></button>
                                    {!! Form::close() !!}
                                    @if($pq['quantity'] > 1)
                                        {!! Form::open(['action' => ['CartController@store'], 'class' => 'form-inline']) !!}
                                        {!! Form::hidden('product_id', $pq['product']->id) !!}
                                        {!! Form::hidden('quantity', $pq['quantity'] - 1) !!}
                                        <button type="submit"><i class="fa fa-minus"></i></button>
                                        {!! Form::close() !!}
                                    @endif
                                </td>
                                <td>{{ '$'.$pq['product']->price }}</td>
                                <td>{{ '$'.($pq['product']->price * $pq['quantity'])}}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['CartController@destroy'], 'class' => 'form-inline']) !!}
                                    {!! Form::hidden('product_id', $pq['product']->id) !!}
                                    <button type="submit"><i class="fa fa-trash-o"></i></button>
                                    {!! Form::close() !!}
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
                        <a href="{{ URL::action('CategoryController@index') }}" class="btn btn-default"><i
                                    class="fa fa-chevron-left"></i>
                            Continue shopping</a>
                    </div>
                    <div class="pull-right">
                        <a href="{{ URL::action('CartController@order') }}" class="btn btn-template-main">Proceed to
                            checkout <i
                                    class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

            </div>
    @else
        @include('notification.partials._alert', ['message' => trans('cart.empty'), 'message_level' => 'info'])
    @endif
@endsection