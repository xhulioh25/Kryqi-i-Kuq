<h1>Shto Nje Program</h1>

<hr/>

{!! Form::model($program = new App\Programi ,['url' => 'programi']) !!}
@include('programet.form', ['submitButtonText' => 'Shto Programin'])

{!! Form::close() !!}

@include('errors.list')