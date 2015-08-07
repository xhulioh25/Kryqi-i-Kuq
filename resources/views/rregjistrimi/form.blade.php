@excet
@include('errors.list')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            Te dhena te pergjithshme
        </div>
        <div class="panel-body">

            <div class="form-group col-sm-6">
                {!! Form::label('emer', 'Emer:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::text('emer', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('mbiemer', 'Mbiemer:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::text('mbiemer', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('datelindja', 'Datelindja:',['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::input('date','datelindja', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('vendlindja', 'Vendlindja:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::select('vendlindja',$vendlindja, null, ['class' => 'form-control tagging']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('gjinia', 'Gjinia:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::select('gjinia', [''=>'Zgjidh Gjinine', '0' => 'Femer', '1' => 'Mashkull'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('gjendja_civile', 'Gjendja Civile:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::select('gjendja_civile', $gjendja_civile, null, ['class' => 'form-control tagging']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('profesioni', 'Profesioni:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::select('profesioni', $profesioni, null, ['class' => 'form-control tagging']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('njohuri_te_tjera', 'Njohuri te Tjera:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::select('njohuri_te_tjera[]', $njohuri_shtese, null, ['class' => 'form-control tagging','multiple']) !!}
                </div>
            </div>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Kontakt
        </div>
        <div class="panel-body">

            <div class="form-group col-sm-6">
                {!! Form::label('email', 'Email:',['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::input('email','email', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('celular', 'Celular:',['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('telefon', 'Telefon:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::text('telefon', null, ['class' => 'form-control']) !!}
                </div>
            </div>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Info
        </div>
        <div class="panel-body">

            <div class="form-group col-sm-6">
                {!! Form::label('qendra', 'Qendra:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::select('qendra', $qendra, null, ['class' => 'form-control tagging']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('pozicioni', 'Pozicioni:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::select('pozicioni', $pozicioni, null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('programi', 'Programi:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::select('programi', $programi, null, ['class' => 'form-control tagging']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('disponimi', 'Disponimi:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::select('disponimi', ['2'=>'I Disponueshem?', '0'=>'Po', '1' => 'Jo'], null, ['class' => 'form-control tagging']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('gatishmeria', 'Gatishmeria:', ['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::select('gatishmeria', $gatishmeria, null, ['class' => 'form-control tagging']) !!}
                </div>
            </div>

            {{--<div class="form-group col-sm-6">--}}
                {{--{!! Form::label('koha', 'Datelindja:',['class' => 'col-sm-4']) !!}--}}
                {{--<div class="col-sm-8">--}}
                    {{--{!! Form::input('date','datelindja', null, ['class' => 'form-control']) !!}--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="form-group col-sm-6">
                {!! Form::label('rregjistrimi', 'Data e Rregjistrimit:',['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::input('date','rregjistrimi', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('viti_i_fundit', 'Viti i Fundit:',['class' => 'col-sm-4']) !!}
                <div class="col-sm-8">
                    {!! Form::input('date','viti_i_fundit', null, ['class' => 'form-control']) !!}
                </div>
            </div>

        </div>
    </div>

    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>

