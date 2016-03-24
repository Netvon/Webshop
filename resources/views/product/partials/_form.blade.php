<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description_long', 'Long Description:') !!}
    {!! Form::textarea('description_long', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description_short', 'Short Description:') !!}
    {!! Form::textarea('description_short', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('is_in_stock', 'Is in stock:') !!}
    {!! Form::checkbox('is_in_stock', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>