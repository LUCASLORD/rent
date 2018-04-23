@extends('layouts.admin')

@section('content')
    <div class="container">
        <h5>Clients</h5>
        <br>
        <a href="{{route('admin.clients.create')}}" class="btn btn-small">Incluir Cliente</a>
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
            @foreach( $clients as $client )
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->user->name}}</td>
                    <td>
                        <a href="{{route('admin.clients.edit',['id'=>$client->id])}}" class="btn btn-small">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$clients->links()}}
    </div>
@endsection
