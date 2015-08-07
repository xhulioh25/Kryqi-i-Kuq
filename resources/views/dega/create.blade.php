@extends('app')

@section('content')
<h1>Shto Nje Dege ose Nen-dege</h1>

<hr/>

{!! Form::model($dega = new App\Dega ,['url' => 'dega']) !!}
@include('dega.form', ['submitButtonText' => 'Shto Degen'])

{!! Form::close() !!}

@endsection