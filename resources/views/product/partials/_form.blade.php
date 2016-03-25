<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', trans('product.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @include('errors.block', ['field_name' => 'name'])
</div>
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
<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
    {!! Form::label('price', trans('product.price')) !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
    @include('errors.block', ['field_name' => 'price'])
</div>
<div class="form-group">
    {!! Form::label('is_in_stock', trans('product.is_in_stock')) !!}
    {!! Form::checkbox('is_in_stock', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>