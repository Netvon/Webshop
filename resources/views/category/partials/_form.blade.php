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
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>