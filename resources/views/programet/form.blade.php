<div class="form-group">
    {!! Form::label('programi', 'Programi:') !!}
    {!! Form::text('programi', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('pershkrimi', 'Pershkrimi:') !!}
    {!! Form::textarea('pershkrimi', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>