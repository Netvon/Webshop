@extends('layouts.app', ['page_title' => trans('product.edit_title')])

@section('content')
    <h2>{{ trans('product.edit_title') }}</h2>
    {!! Form::model($product, ['method' => 'PATCH', 'action' => ['ProductController@update', $product->id]]) !!}
    @include('product.partials._form', ['submitButtonText' => trans('product.edit_action')])
    {!! Form::close() !!}
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){

            $('#product-spec-add').click(function(){
                var specList = $('#product-spec-list');

                var newSpecid = 0;

                console.log($('#product-spec-list .list-group-item:last-child'));

                if($('#product-spec-list .list-group-item:last-child').length > 0)
                    newSpecid = $('#product-spec-list .list-group-item:last-child').data('specid') + 1;

                $('<li class="list-group-item" data-specid="'+newSpecid+'">' +
                        '<div class="row">' +
                        '<div class="col-md-6">' +
                        '<label for="spec['+newSpecid+'][name]">Naam</label>' +
                        '<input class="form-control" name="spec['+newSpecid+'][name]" type="text">' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<label for="spec['+newSpecid+'][value]">Waarde</label>' +
                        '<input class="form-control col-md-6" name="spec['+newSpecid+'][value]" type="text">' +
                        '</div>' +
                        '</div>' +
                        '</li>').appendTo(specList);
            });
        });
    </script>
@endsection