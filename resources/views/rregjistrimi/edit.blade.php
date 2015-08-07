{{--<h1>Modifiko: {{ $personat->FullName }}</h1>--}}
@extends('app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
{{--{!! Form::model($personat , ['method' => 'PATCH', 'action' => ['PersonatController@update' , $personat->id]]) !!}--}}
@include('rregjistrimi.form', ['submitButtonText' => 'Ruaj Ndryshimet'])
{{--{!! Form::close() !!}--}}
@endsection
{{--@include('errors.list')--}}