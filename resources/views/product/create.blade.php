@extends('layouts.app', ['page_title' => trans('product.create_title')])

@section('content')
    @if(!$create_in_category)
        <h2>{{ trans('product.create_title') }}</h2>
    @else
        <h2>{{ trans('product.create_title_category', ['name' => $create_in_category->name]) }}</h2>
    @endif
    {!! Form::open(['url' => 'products']) !!}

    @include('product.partials._form', ['submitButtonText' => trans('product.create_action')])
    {!! Form::close() !!}
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){

            $('#product-spec-add').click(function(){
                var specList = $('#product-spec-list');

                var newSpecid = $('#product-spec-list .list-group-item:last-child').data('specid') + 1;

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