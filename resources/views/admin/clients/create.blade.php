@extends('layouts.admin')

@section('content')
    <div class="container">
        <h5>CADASTRAR CLIENTE</h5>

        @include('errors._check')
        <div class="row">
            {!! Form::open(['route'=>'admin.clients.store', 'class' => 'col sm12']) !!}

            @include('admin.clients._form')

            <div class="row">
                {!! Form::submit('Criar Categoria', ['class'=>'btn']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
