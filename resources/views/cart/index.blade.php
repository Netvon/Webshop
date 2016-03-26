@extends('layouts.app', ['page_title' => trans('cart.index_title')])

@section('content')
    <div class="page-header">
        <h2>{{ trans('cart.index_title') }}</h2>
    </div>
    @if(count($products) > 0)
        <ul class="list-group">
            @foreach($products as $product)
                <li class="list-group-item">{{ $product['name'] }}</li>
            @endforeach
        </ul>
    @else
        @include('notification.partials._alert', ['message' => trans('cart.empty'), 'message_level' => 'info'])
    @endif
@endsection