<div class="list-group-item @if($product->trashed()) {{'disabled'}}@endif">
    <div class="row">
        <div class="col-xs-9">
            <h4 class="list-group-item-heading">
                @if($product->trashed())
                    {{ $product->name }}
                @else
                    <a href="{{URL::action('ProductController@show', $product->slug)}}">{{$product->name}}</a>
                @endif
                <small> #{{ $product->id }}</small>
            </h4>
            <p class="list-group-item-text text-muted">
                {{ $product->description_short }}
            </p>
        </div>

        <div class="col-xs-3 pull-right">
            @if(!$product->trashed())
                {!! Form::model($product, ['method' => 'DELETE', 'action' => ['Manage\ProductController@destroy', $product->id]]) !!}
            @else
                {!! Form::model($product, ['method' => 'PATCH', 'action' => ['Manage\ProductController@restore', $product->id]]) !!}
            @endif
            <div class="btn-group pull-right" role="group">
                @unless($product->trashed())
                    <a class="btn btn-default btn-xs"
                       href="{{ URL::action('Manage\ProductController@edit', $product->slug) }}">
                        {{trans('product.edit_title') }}
                    </a>
                @endunless
                <button type="submit" class="btn btn-default btn-xs">
                    @if(!$product->trashed())
                        {{ trans('product.softdelete_action') }}
                    @else
                        {{ trans('product.restore_action') }}
                    @endif
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

</div>