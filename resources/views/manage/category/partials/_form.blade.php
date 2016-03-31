<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', trans('category.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @include('errors.block', ['field_name' => 'name'])
</div>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', trans('category.description')) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    @include('errors.block', ['field_name' => 'description'])
</div>
<div class="form-group">
    @if(isset($create_in_category))
        {{ Form::label('parent', 'Parent Category') }}
        <select class="form-control" name="parent">
            <option value="-1">--------</option>
            @foreach(\App\Category::all() as $parent)
                @if(isset($create_in_category) && $create_in_category == $parent)
                    <option value="{{ $parent->id }}" selected>{{ $parent->name }}</option>
                @else
                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                @endif
            @endforeach
        </select>
    @endif

    @if(isset($category))
        {{ Form::label('parent', 'Parent Category') }}
        <div class="form-control" readonly>
            @if(is_null($category->parent_id))
                None
            @else
                {{ $category->parent->name }}
            @endif
        </div>
    @endif
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>