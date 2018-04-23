@extends('layouts.admin')

@section('content')
    <div class="container">
        <h5>Editar Categoria: {{$client->name}}</h5>

        @include('errors._check')
        <div class="row">
            {!! Form::model($client, ['route'=>['admin.clients.update',$client->id], 'class' => 'col sm12']) !!}

            @include('admin.clients._form')

            <div class="row">
                {!! Form::submit('Editar', ['class'=>'btn']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
