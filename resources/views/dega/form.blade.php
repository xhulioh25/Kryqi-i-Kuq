<div class="form-group">
    {!! Form::label('dega', 'Dega\Nen-dega:') !!}
    {!! Form::text('dega', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('qyteti', 'Qyteti:') !!}
    {!! Form::select('qyteti', [''=>'Zgjidh Qytetin Ku Ndodhet', $qyteti], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('varet_nga', 'Varet Nga:') !!}
    {!! Form::select('varet_nga', [''=>'Zgjidh Degen Kryesore', $varet_nga], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@include('errors.list')
