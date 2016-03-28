@extends('layouts.app', ['page_title' => trans('tag.index_title')])

@section('content')
    <div class="page-header">
        <h2>{{ trans('tag.index_title') }}</h2>
    </div>

    {!! Form::open(['action' => 'Manage\TagController@store', 'class' => 'form-inline']) !!}
    @include('manage.tag.partials._form', ['submitButtonText' => trans('tag.create_action')])
    {!! Form::close() !!}

    <div class="list-group">
        @foreach(\App\Tag::withTrashed()->get() as $tag)
            <div class="list-group-item">
                <div class="row">
                    <div class="col-xs-1">
                        {{ $tag->id }}
                    </div>

                    <div class="col-xs-9">
                        {{ $tag->name }} @if($tag->trashed()) {{'- hidden'}}@endif
                    </div>

                    <div class="col-md-2 pull-right">
                        @if(!$tag->trashed())
                            {!! Form::model($tag, ['method' => 'DELETE', 'action' => ['Manage\TagController@destroy', $tag->id]]) !!}
                        @else
                            {!! Form::model($tag, ['method' => 'PATCH', 'action' => ['Manage\TagController@restore', $tag->id]]) !!}
                        @endif
                        <div class="btn-group pull-right" role="group">
                            @unless($tag->trashed())
                            <a class="btn btn-default btn-xs"
                               href="{{ URL::action('Manage\TagController@edit', $tag->slug) }}">
                                {{ trans('tag.edit_title') }}
                            </a>
                            @endunless
                            <button type="submit" class="btn btn-default btn-xs">
                                @if(!$tag->trashed())
                                    {{ trans('tag.softdelete_action') }}
                                @else
                                    {{ trans('tag.restore_action') }}
                                @endif
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection