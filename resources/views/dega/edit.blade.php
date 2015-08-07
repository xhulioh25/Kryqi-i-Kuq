<h1>Modifiko: {{ $dega->dega }}</h1>

{!! Form::model($dega , ['method' => 'PATCH', 'action' => ['DegaController@update' , $dega->id]]) !!}
    @include('dega.form', ['submitButtonText' => 'Ruaj Ndryshimet'])
{!! Form::close() !!}

@include('errors.list')