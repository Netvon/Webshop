<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('tag.name')]) !!}
    @include('errors.block', ['field_name' => 'name'])
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>