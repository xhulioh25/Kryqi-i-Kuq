<h1>Rregjistrim i ri</h1>

<hr/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css">--}}
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
{!! Form::model($personat = new App\Personat ,['action' => 'PersonatController@store']) !!}
    @include('rregjistrimi.form', ['submitButtonText' => 'Shto Programin'])
{!! Form::close() !!}

{{--@include('errors.list')--}}