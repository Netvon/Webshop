@extends('layouts.app', ['page_title' => 'ARROW - Checkout', 'nav_link' => 'checkout'])

@section('content')
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Checkout - Succes!</h1>
            </div>
            @include('arrow.partials._breadcrumbs', ['breadcrumbs' => ['ArrowController@index' => 'home', 'CategoryController@index' => 'shop', '0' => 'checkout']])
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="box">
            @include('notification.partials._alert', ['message_level' => 'success', 'message' => 'Well done! You have succesfully ordered your products.'])

            <div class="box-footer">
                <div class="pull-right">
                    <a href="{{ URL::action('ArrowController@index') }}" class="btn btn-template-main">Go back home<i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection