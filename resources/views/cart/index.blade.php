@extends('layouts.app', ['page_title' => trans('cart.index_title')])

@section('content')
    <div class="page-header">
        <h2>{{ trans('cart.index_title') }}</h2>
    </div>
    @if(count($cart) > 0)
        <ul class="list-group">
            @foreach($cart as $pq)
                <li class="list-group-item">{{ $pq['product']->name }} - {{ $pq['quantity'] }}</li>
            @endforeach
        </ul>
    @else
        @include('notification.partials._alert', ['message' => trans('cart.empty'), 'message_level' => 'info'])
    @endif
@endsection