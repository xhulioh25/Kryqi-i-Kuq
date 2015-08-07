@extends('app')

@section('content')
<div id="employee_div" class="container">
    <div class="col-sm-12">
        <div class="col-sm-8 pull-left">
            <h2>Programet</h2>
        </div>
        <div class="col-md-offset-10 col-sm-offset-12 col-sm-10 col-xs-12">
            <a href="{{ url('/programi/create') }}" class="btn btn-primary fa fa-plus">   Shto Programe</a>
        </div>

    </div>
    <hr/>
    <div class="col-lg-12">
        @foreach($programi as $program)
            <article>
                <h4>
                    <a href="{{ url('/programi/edit', $program->id) }}">{{ $program->programi }}</a>
                </h4>
                {{$program->pershkrimi}}
            </article>
            <hr/>
        @endforeach
    </div>
</div>
@endsection