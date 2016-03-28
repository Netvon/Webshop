<div class="input-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('tag.name')]) !!}
    <span class="input-group-btn">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    </span>
</div>
@include('errors.block', ['field_name' => 'name'])