@extends('layouts.admin')

@section('content')
    <div class="container">
        <h5>Novo Veiculo</h5>

        @include('errors._check')
        <div class="row">
            {!! Form::open(['route'=>'admin.vehicles.store', 'class' => 'col sm12']) !!}

            @include('admin.vehicles._form')

            <div class="row">
                <div class="input-field col xl3">
                    {!! Form::text('license_state', null, ['class'=>'validade']) !!}
                    {!! Form::label('license_state','Estado:') !!}
                </div>
                <div class="input-field col xl3">
                    {!! Form::text('price', null, ['class'=>'validade']) !!}
                    {!! Form::label('price','Preço - Locação:') !!}
                </div>
                <div class="input-field col xl3">
                    {!! Form::select('status', $list_status, null, ['class'=>'validade']) !!}
                    {!! Form::label('status','Status:') !!}
                </div>

            </div>

            <div class="row">
                {!! Form::submit('Incluir', ['class'=>'btn']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
