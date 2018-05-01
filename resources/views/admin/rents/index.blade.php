@extends('layouts.admin')

@section('content')
    <div class="container">
        <h5>Locações</h5>
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
            @foreach( $rents as $rent )
                <tr>
                    <td>{{$rent->id}}</td>
                    <td>{{$rent->name}}</td>
                    <td>
                        <a href="{{route('admin.rents.edit',['id'=>$rent->id])}}" class="btn btn-small">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$rents->links()}}
    </div>
@endsection
