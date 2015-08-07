<h1>Modifiko: {{ $program->programi }}</h1>

{!! Form::model($program , ['method' => 'PATCH', 'action' => ['ProgramController@update' , $program->id]]) !!}
    @include('programet.form', ['submitButtonText' => 'Ruaj Ndryshimet'])
{!! Form::close() !!}

@include('errors.list')