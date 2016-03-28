<div class="list-group-item @if($cat_item->trashed()) {{'disabled'}}@endif">
    <div class="row">
        <div class="col-xs-9">
            <h4 class="list-group-item-heading">
                @if($cat_item->trashed())
                    {{ $cat_item->name }}
                @else
                    <a href="{{URL::action('Manage\CategoryController@show', $cat_item->slug)}}">{{$cat_item->name}}</a>
                @endif
            </h4>
            <p class="list-group-item-text text-muted">{{$cat_item->description}}</p>
            <ul>
                @foreach($cat_item->children() as $child)
                    <li>{{ $child->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="col-xs-3 pull-right">
            @if(!$cat_item->trashed())
                {!! Form::model($cat_item, ['method' => 'DELETE', 'action' => ['Manage\CategoryController@destroy', $cat_item->id]]) !!}
            @else
                {!! Form::model($cat_item, ['method' => 'PATCH', 'action' => ['Manage\CategoryController@restore', $cat_item->id]]) !!}
            @endif
            <div class="btn-group pull-right" role="group">
                @unless($cat_item->trashed())
                    <a class="btn btn-default btn-xs"
                       href="{{ URL::action('Manage\CategoryController@edit', $cat_item->slug) }}">
                        {{trans('category.edit_title') }}
                    </a>
                @endunless
                <button type="submit" class="btn btn-default btn-xs">
                    @if(!$cat_item->trashed())
                        {{ trans('category.softdelete_action') }}
                    @else
                        {{ trans('category.restore_action') }}
                    @endif
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

</div>