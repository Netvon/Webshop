<div class="panel panel-default">
    <div class="panel-heading">General</div>
    <div class="panel-body">
        <div class="form-group">
            {!! Form::label('category_id', trans('product.category')) !!}
            @if(!$create_in_category)
                <select class="form-control" name="category_id" id="categories_list">
                    @foreach(\App\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            @else
                <div class="form-control" readonly>{{ $create_in_category->name }}</div>
                {!! Form::hidden('category_id', $create_in_category->id) !!}
            @endif
        </div>

        <div class="row">
            <div class="col-md-10">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', trans('product.name')) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    @include('errors.block', ['field_name' => 'name'])
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                    {!! Form::label('price', trans('product.price')) !!}
                    <div class="input-group">
                        <div class="input-group-addon">€</div>
                        {!! Form::number('price', null, ['class' => 'form-control']) !!}
                    </div>
                    @include('errors.block', ['field_name' => 'price'])
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Description</div>
    <div class="panel-body">
        <div class="form-group{{ $errors->has('description_short') ? ' has-error' : '' }}">
            {!! Form::label('description_short', trans('product.description_short')) !!}
            {!! Form::text('description_short', null, ['class' => 'form-control']) !!}
            @include('errors.block', ['field_name' => 'description_short'])
        </div>
        <div class="form-group{{ $errors->has('description_long') ? ' has-error' : '' }}">
            {!! Form::label('description_long', trans('product.description_long')) !!}
            {!! Form::textarea('description_long', null, ['class' => 'form-control']) !!}
            @include('errors.block', ['field_name' => 'description_long'])
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('is_in_stock', trans('product.is_in_stock')) !!}
    {!! Form::checkbox('is_in_stock', null, ['class' => 'form-control']) !!}
</div>

<div class="panel panel-default">
    <div class="panel-heading">Specificaties</div>
    <p class="panel-body">
        <a class="btn btn-default" id="product-spec-add">Voeg toe</a>
    </p>
    <ul class="list-group" id="product-spec-list">
        @if(old('spec'))
            @foreach(old('spec') as $key => $spec)
                @include('manage.product.partials._spec', ['spec_id' => $key, 'spec_name' => $spec['name'], 'spec_val' => $spec['value']])
            @endforeach
        @elseif(!empty($product) && count($product->specifications) > 0)
            @foreach($product->specifications as $key => $spec)
                @include('manage.product.partials._spec', ['spec_id' => $spec['id'], 'spec_name' => $spec['name'], 'spec_val' => $spec['value']])
            @endforeach
        @endif
    </ul>
</div>

<div class="form-group">
    {!! Form::label('image', 'Choose an image') !!}
    {!! Form::file('image[]', ['multiple', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple',  'id' => 'tags_list']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>