@extends('layouts.admin')

@section('content')
    <div class="container">
        <h5>Categorias</h5>
        <br>
        <a href="{{route('admin.categories.create')}}" class="btn btn-small">Nova Categoria</a>
        <br><br>

        <table class="centered">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach( $categories as $category )
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{route('admin.categories.edit',['id'=>$category->id])}}" class="btn btn-small">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$categories->links()}}
    </div>
@endsection
