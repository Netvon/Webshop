<div class="list-group-item @if($blog->trashed()) {{'disabled'}}@endif">
    <div class="row">
        <div class="col-xs-9">
            <h4 class="list-group-item-heading">
                @if($blog->trashed())
                    {{ $blog->title }}
                @else
                    <a href="{{URL::action('BlogController@show', $blog->slug)}}">{{$blog->title}}</a>
                @endif
            </h4>
            <p class="list-group-item-text text-muted">
                Posted on: {{$blog->created_at}}
            </p>
        </div>

        <div class="col-xs-3 pull-right">
            @if(!$blog->trashed())
                {!! Form::model($blog, ['method' => 'DELETE', 'action' => ['Manage\BlogController@destroy', $blog->id]]) !!}
            @else
                {!! Form::model($blog, ['method' => 'PATCH', 'action' => ['Manage\BlogController@restore', $blog->id]]) !!}
            @endif
            <div class="btn-group pull-right" role="group">
                @unless($blog->trashed())
                    <a class="btn btn-default btn-xs"
                       href="{{ URL::action('Manage\BlogController@edit', $blog->slug) }}">
                        {{trans('blog.edit_title') }}
                    </a>
                @endunless
                <button type="submit" class="btn btn-default btn-xs">
                    @if(!$blog->trashed())
                        {{ trans('blog.softdelete_action') }}
                    @else
                        {{ trans('blog.restore_action') }}
                    @endif
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

</div>