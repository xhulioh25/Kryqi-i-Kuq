@extends('app')

@section('content')
<div id="employee_div" class="container">
    <div class="col-sm-12">
        <div class="col-sm-8 pull-left">
            <h2>Deget</h2>
        </div>
        <div class="col-md-offset-10 col-sm-offset-12 col-sm-10 col-xs-12">
            <a href="{{ url('/dega/create') }}" class="btn btn-primary fa fa-plus">   Shto Deget</a>
        </div>
    </div>
    <hr/>
    <div class="col-lg-12">
        @foreach($deget as $dega)
            <article>
                <h4>
                    <a href="{{ url('/dega/edit', $dega->id) }}">{{ $dega->dega }}</a>
                </h4>
            </article>
            <hr/>
        @endforeach
    </div>
</div>
@endsection