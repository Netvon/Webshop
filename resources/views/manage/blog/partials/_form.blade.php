<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', trans('title.name')) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    @include('errors.block', ['field_name' => 'title'])
</div>
<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', trans('body.description')) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @include('errors.block', ['field_name' => 'body'])
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>