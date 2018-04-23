@extends('layouts.admin')

@section('content')
    <div class="container">
        <h5>Editar Veículo: {{$vehicle->model}}</h5>

        @include('errors._check')
        <div class="row">
            {!! Form::model($vehicle, ['route'=>['admin.vehicles.update',$vehicle->id], 'class' => 'col sm12']) !!}

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
                    {!! Form::text('status', null, ['class'=>'validade']) !!}
                    {!! Form::label('status','Status:') !!}
                </div>

            </div>

            <div class="row">
                {!! Form::submit('Editar', ['class'=>'btn']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
