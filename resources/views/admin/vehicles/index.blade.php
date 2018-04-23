@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3>Veiculos</h3>
        <br>
        <a href="{{route('admin.vehicles.create')}}" class="btn btn-small">Novo Veiculo</a>
        <br><br>

        <table class="centered">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>Categoria</th>
                <th>Ação</th>
            </tr>
            </thead>

            <tbody>
            @foreach( $vehicles as $vehicle )
                <tr>
                    <td>{{$vehicle->id}}</td>
                    <td>{{$vehicle->model}}</td>
                    <td>{{$vehicle->category->name}}</td>
                    <td>
                        <a href="{{route('admin.vehicles.edit',['id'=>$vehicle->id])}}" class="btn btn-small">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$vehicles->links()}}
    </div>
@endsection
