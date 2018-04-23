@extends('layouts.admin')

@section('content')
    <div class="container">
        <h5>Editar Categoria: {{$category->name}}</h5>

        @include('errors._check')
        <div class="row">
            {!! Form::model($category, ['route'=>['admin.categories.update',$category->id], 'class' => 'col sm12']) !!}

            @include('admin.categories._form')

            <div class="row">
                {!! Form::submit('Editar', ['class'=>'btn']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
