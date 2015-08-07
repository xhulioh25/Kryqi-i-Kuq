@extends('app')

@section('content')
<h1>Rregjistrim i ri</h1>

<hr/>

{!! Form::model($personat = new App\Personat ,['action' => 'PersonatController@store']) !!}
    @include('rregjistrimi.form', ['submitButtonText' => 'Shto Programin'])
{!! Form::close() !!}
@endsection
{{--@include('errors.list')--}}